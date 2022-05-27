<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Storage;
use View;
use DB;
use Str;

class Crud extends Model
{
    use HasFactory;

    public static function getFieldsData($singular, $plural) {

        $foreign_keys = Schema::getConnection()->getDoctrineSchemaManager()->listTableForeignKeys($plural);
        $related_tables = [];
        if (isset($foreign_keys)) {
            $same_table = [];
            foreach ($foreign_keys as $foreign_key) {
                $model = Str::studly(Str::singular($foreign_key->getForeignTableName()));

                // Observo se existe mais de uma relação para a mesma tabela
                // Se houver, marco que não é a primeira vez que esta tabela aparece
                // Assim, posteriormente eu posso ignorar quando não for a primeira vez
                $count = 1;
                if (in_array($model, $same_table)) {
                    $count++;
                }
                $same_table[] = $model;

                // Observo se o nome do campo está no padrão "nome_tabela_id"
                // Se não estiver, o nome da relação será o nome do campo sem o "_id"
                $field_name = $foreign_key->getLocalColumns()[0];
                $relationship_name = str_replace('_id', '', $field_name);

                $related_tables[$foreign_key->getLocalColumns()[0]] = [
                    'table' => $foreign_key->getForeignTableName(),
                    'foreign_id' => $foreign_key->getLocalColumns()[0],
                    'model' => $model,
                    'model_count' => $count,
                    'relationship_name' => $relationship_name,
                ];
            }
        }

        $db_tables = DB::select('SHOW TABLES');
        $db_tables_names = [];
        $db_name = 'Tables_in_' . env('DB_DATABASE');
        $child_tables = [];
        foreach ($db_tables as $db_table) {

            $db_tables_names[] = $db_table->$db_name;
            $foreign_keys = Schema::getConnection()->getDoctrineSchemaManager()->listTableForeignKeys($db_table->$db_name);
            foreach ($foreign_keys as $foreign_key) {
                if ($foreign_key->getForeignTableName() == $plural) {
                    $model = Str::studly(Str::singular($db_table->$db_name));
                    
                // Observo se existe mais de uma relação para a mesma tabela
                // Se houver, marco que não é a primeira vez que esta tabela aparece
                // Assim, posteriormente eu posso ignorar quando não for a primeira vez
                $count = 1;
                if (in_array($model, $same_table)) {
                    $count++;
                }
                $same_table[] = $model;

                    $child_tables[] = [
                        'table' => $db_table->$db_name,
                        'key' => $foreign_key->getLocalColumns()[0],
                        'model' => $model,
                        'model_count' => $count,
                    ];
                }
            }
        }

        if (in_array(strtolower($plural), $db_tables_names)) {
            $data = DB::select('DESCRIBE '.strtolower($plural));
        } else {
            return FALSE;
        }
        
        $fieldsArray = [];
        $i = 0;
        $appends = [];
        foreach ($data as $key) {

            // Extract if its required
            $required = ($key->Null == 'NO') ? true : false ;
            
            // Extract the field type
            $type = $typeArr = explode("(", $key->Type, 2)[0];

            // Extract the field options
            $options = [];
            if ($type == 'enum') {
                $options_str = explode("(", $key->Type, 2)[1];
                $options_str = explode(")", $options_str, 2)[0];
                $options_str = str_replace("'", '', $options_str);
                $options_arr = explode(",", $options_str);
                foreach ($options_arr as $option) {
                    $options[] = [
                        'value' => $option,
                        'label' => $option,
                    ];
                }
            }

            //extract the number for the max attribute
            preg_match_all('!\d+!', $key->Type, $matches);
            
            // Setup simplified type arrays
            $stringArray = ['char','varchar','tinystring'];
            $textAreaArray = ['text','mediumtext','longtext'];
            $simplifiedType = 'number';
            
            if (in_array($type, $stringArray)) {
                $simplifiedType = 'text';
            } else if(in_array($type, $textAreaArray)){
                $simplifiedType = 'textarea';
            }
            
            $fieldsArray[$i]['name'] = $key->Field;
            $fieldsArray[$i]['pascal'] = Str::studly($key->Field);
            $fieldsArray[$i]['camel'] = Str::camel($key->Field);
            $fieldsArray[$i]['snake'] = Str::snake($key->Field);
            $fieldsArray[$i]['type'] = $type;
            $fieldsArray[$i]['simplified_type'] = $simplifiedType;
            $fieldsArray[$i]['required'] = $required;
            $fieldsArray[$i]['max'] = (isset($matches[0][0])) ? (int)$matches[0][0] : false;
            $validations = [];
            if ($fieldsArray[$i]['required'] && $fieldsArray[$i]['name'] !== 'id') $validations[] = 'required';
            if ($fieldsArray[$i]['max'] && $fieldsArray[$i]['name'] !== 'id') $validations[] = 'max:'.$fieldsArray[$i]['max'];
            if ($fieldsArray[$i]['type'] == 'date') {$validations[] = 'date'; $appends[] = $fieldsArray[$i]['name'] . '_str';}
            if ($fieldsArray[$i]['type'] == 'datetime') {$validations[] = 'datetime'; $appends[] = $fieldsArray[$i]['name'] . '_str';}
            if (strpos($fieldsArray[$i]['name'], 'value') !== false || $fieldsArray[$i]['type'] == 'integer') $validations[] = 'integer';
            if (strpos($fieldsArray[$i]['name'], 'email') !== false) $validations[] = 'email';
            if ($fieldsArray[$i]['name'] == 'active') $appends[] = 'active_str';
            if ($fieldsArray[$i]['name'] == 'status') $appends[] = 'status_str';
            $fieldsArray[$i]['validations'] = implode('|', $validations);
            $fieldsArray[$i]['foreign_key'] = false;
            $fieldsArray[$i]['foreign_table'] = '';
            if (isset($related_tables[$key->Field])) {
                $fieldsArray[$i]['foreign_key'] = $related_tables[$key->Field]['foreign_id'];
                $fieldsArray[$i]['foreign_table'] = $related_tables[$key->Field]['table'];
            }
            $fieldsArray[$i]['options'] = $options;
            
            $i++;
        };
        $appends = "'".implode("', '", $appends)."'";
        $appends = htmlspecialchars($appends);

        $other_tables = [];
        if (!empty($related_tables)) {
            $other_tables[] = implode("', '", array_column($related_tables, 'relationship_name'));
        }
        if (!empty($child_tables)) {
            $other_tables[] = implode("', '", array_column($child_tables, 'table'));
        }
        $other_tables_str = "'".implode("', '", $other_tables)."'";
        $other_tables_str = htmlspecialchars($other_tables_str);
        
        $pascal_singular = Str::studly($singular);
        $pascal_plural = Str::studly($plural);
        return array(
            'singular' => $singular,
            'plural' => $plural,
            'pascal_singular' => $pascal_singular,
            'pascal_plural' => $pascal_plural,
            'singular_lower' => strtolower($singular),
            'plural_lower' => strtolower($plural),
            'related_tables' => $related_tables,
            'child_tables' => $child_tables,
            'other_tables' => $other_tables,
            'other_tables_str' => $other_tables_str,
            'fields' => $fieldsArray,
            'appends' => $appends
        );
    
    }

    public static function createRoutes($data) {
    
        $client = Storage::createLocalDriver(['root' => config('crudApi.routes_dir')]);
        $routes = "\n// ".$data['pascal_plural']."\n";
        $routes .= "Route::get('/".$data['plural_lower']."', [App\Http\Controllers\\".$data['pascal_plural']."Controller::class, 'index']);\n";
        $routes .= "Route::get('/".$data['plural_lower']."/{".lcfirst($data['pascal_singular']) ."}', [App\Http\Controllers\\".$data['pascal_plural']."Controller::class, 'show']);\n";
        $routes .= "Route::post('/".$data['plural_lower']."', [App\Http\Controllers\\".$data['pascal_plural']."Controller::class, 'store']);\n";
        $routes .= "Route::put('/".$data['plural_lower']."/{".lcfirst($data['pascal_singular']) ."}', [App\Http\Controllers\\".$data['pascal_plural']."Controller::class, 'update']);\n";
        $routes .= "Route::delete('/".$data['plural_lower']."/{".lcfirst($data['pascal_singular']) ."}', [App\Http\Controllers\\".$data['pascal_plural']."Controller::class, 'destroy']);\n";

        if(!empty($data['related_tables'])) {
            $routes .= "Route::get('/".$data['plural_lower']."/related/options', [App\Http\Controllers\\".$data['pascal_plural']."Controller::class, 'options']);\n";
        }
        foreach ($data['fields'] as $field) {
            if (!empty($field['options'])) {
                $routes .= "Route::get('/".$data['plural_lower']."/".$field['name']."/options/'".", [App\Http\Controllers\\".$data['pascal_plural']."Controller::class, '".$field['name']."_options']);\n";
            }
        }
        
        if ($client->exists(config('crudApi.routes_file'))) {
            $routeFile = $client->get('/'.config('crudApi.routes_file'));
            $appendedRoutes = $routeFile.$routes;
            $client->put(config('crudApi.routes_file'), $appendedRoutes);
        } else {
            $routeFile = $client->get('/'.config('crudApi.routes_file'));
            $client->put(config('crudApi.routes_file'), $routes);
        }
    }

    public static function createModel($data) {
      
        $client = Storage::createLocalDriver(['root' => config('crudApi.model_dir')]);
        
        // Check if file already exists. If it does ask if we want to overwrite
        if ($client->exists($data['pascal_singular'])) {
            if (!self::confirm($data['pascal_singular'].' model already exists. Would you like to overwrite this model?')){
                return false;
            }
        }
            
        // Create the file
        $modelTemplate = view::make('crudApi::model',['data' => $data])->render();
        $modelTemplate = "<?php \n".$modelTemplate." ?>";
        $client->put($data['pascal_singular'].'.php', $modelTemplate );

        return;
    
    }

    public static function createResource($data) {
      
        $client = Storage::createLocalDriver(['root' => config('crudApi.resource_dir')]);
        
        // Create the file
        $resourceTemplate = view::make('crudApi::resource',['data' => $data])->render();
        $resourceTemplate = "<?php \n".$resourceTemplate." ?>";
        $client->put($data['pascal_singular'].'Resource.php', $resourceTemplate );

        return;
    }

    public static function createRequest($data) {
      
        $client = Storage::createLocalDriver(['root' => config('crudApi.request_dir')]);
            
        // Create the file
        $requestTemplate = view::make('crudApi::request',['data' => $data])->render();
        $requestTemplate = "<?php \n".$requestTemplate." ?>";
        $client->put($data['pascal_singular'].'Request.php', $requestTemplate );

        return;
    
    }

    public static function createRepository($data) {
      
        $client = Storage::createLocalDriver(['root' => config('crudApi.repository_dir')]);
        
        // Check if file already exists. If it does ask if we want to overwrite
        if ($client->exists($data['pascal_singular'])) {
            if (!self::confirm($data['pascal_singular'].' repository already exists. Would you like to overwrite this repository?')){
                return false;
            }
        }
            
        // Create the file
        $repositoryTemplate = view::make('crudApi::repository',['data' => $data])->render();
        $repositoryTemplate = "<?php \n".$repositoryTemplate." ?>";
        $client->put($data['pascal_singular'].'Repository.php', $repositoryTemplate );

        return;
    
    }

    public static function createController($data) {
    
        $client = Storage::createLocalDriver(['root' => config('crudApi.controller_dir')]);
        
        // Create the file
        $controllerTemplate = view::make('crudApi::controller',['data' => $data])->render();
        $controllerTemplate = "<?php \n".$controllerTemplate." ?>";
        $client->put($data['pascal_plural'].'Controller.php', $controllerTemplate );

        return;
    
    }

    public static function createIndexComponentTemplate($data) {
    
        $client = Storage::createLocalDriver(['root' => config('crudApi.components_file_dir')]);
        
        // Create the file
        $crudTemplate = view::make('crudApi::index',['data' => $data])->render();
        $client->put($data['pascal_plural'].'/'.$data['pascal_plural'].'.js', $crudTemplate );
        
        return;
    
    }

    public static function createEditComponentTemplate($data) {
    
        $client = Storage::createLocalDriver(['root' => config('crudApi.components_file_dir')]);
        
        // Create the file
        $crudTemplate = view::make('crudApi::edit',['data' =>$data])->render();
        $client->put($data['pascal_plural'].'/'.$data['pascal_singular'].'Edit.js', $crudTemplate );
        
        return;
    
    }

    public static function createAddComponentTemplate($data) {
    
        $client = Storage::createLocalDriver(['root' => config('crudApi.components_file_dir')]);
        
        // Create the file
        $crudTemplate = view::make('crudApi::add',['data' =>$data])->render();
        $client->put($data['pascal_plural'].'/'.$data['pascal_singular'].'Add.js', $crudTemplate );
        
        return;
    
    }

    public static function createAppComponentTemplate($data) {

        $client = Storage::createLocalDriver(['root' => config('crudApi.components_file_dir')]);

        //Imports
        $imports_text = "\n//".$data['pascal_plural']."\n";
        $imports_text .= "import ".$data['pascal_plural']." from './Components/".$data['pascal_plural']."/".$data['pascal_plural']."';\n";
        $imports_text .= "import ".$data['pascal_singular']."Add from './Components/".$data['pascal_plural']."/".$data['pascal_singular']."Add';\n";
        $imports_text .= "import ".$data['pascal_singular']."Edit from './Components/".$data['pascal_plural']."/".$data['pascal_singular']."Edit';\n";

        //Agrupo todas as importações em um arquivo
        if ($client->exists('App_imports.js')) {
            $importsFile = $client->get('App_imports.js');
            $appendedImports = $importsFile.$imports_text;
            $client->put('App_imports.js', $appendedImports);
        } else {
            $client->put('App_imports.js', $imports_text);
        }
        $imports = $client->get('App_imports.js');

        //EditWrappers
        $edits_text = "\n\tconst ".$data['pascal_singular']."EditWrapper = (props) => {\n";
        $edits_text .= "\t\tconst params = useParams();\n";
        $edits_text .= "\t\treturn <".$data['pascal_singular']."Edit {...{...props, match: {params}} } />\n";
        $edits_text .= "\t}\n";

        //Agrupo todas as edições em um arquivo
        if ($client->exists('App_edits.js')) {
            $editsFile = $client->get('App_edits.js');
            $appendedEdits = $editsFile.$edits_text;
            $client->put('App_edits.js', $appendedEdits);
        } else {
            $client->put('App_edits.js', $edits_text);
        }
        $edits = $client->get('App_edits.js');

        //Routes
        $routes_text = "\n\t\t\t\t{/* ".$data['pascal_plural']." */}\n";
        $routes_text .= "\t\t\t\t<Route path='/".$data['plural']."/list' element={<".$data['pascal_plural']." />} />\n";
        $routes_text .= "\t\t\t\t<Route path='/".$data['plural']."/add' element={<".$data['pascal_singular']."Add />} />\n";
        $routes_text .= "\t\t\t\t<Route path='/".$data['plural']."/update/:id' element={<".$data['pascal_singular']."EditWrapper />} />\n";

        //Agrupo todas as rotas em um arquivo
        if ($client->exists('App_routes.js')) {
            $routesFile = $client->get('App_routes.js');
            $appendedRoutes = $routesFile.$routes_text;
            $client->put('App_routes.js', $appendedRoutes);
        } else {
            $client->put('App_routes.js', $routes_text);
        }
        $routes = $client->get('App_routes.js');
        
        // Create the file
        $data = [
            'imports' => htmlspecialchars($imports),
            'edits' => htmlspecialchars($edits),
            'routes' => htmlspecialchars($routes),
        ];
        $crudTemplate = view::make('crudApi::app',['data' =>$data])->render();
        $client->put('App.js', $crudTemplate );
        
        return;
    
    }

    public static function createHeaderComponentTemplate($data) {
    
        $client = Storage::createLocalDriver(['root' => config('crudApi.components_file_dir')]);

        //Header
        $headers_text = "\n\t\t<ExpandableItem\n";
        $headers_text .= "\t\t\trender={xprops => (\n";
        $headers_text .= "\t\t\t<>\n";
        $headers_text .= "\t\t<ListItemButton onClick={() => xprops.setOpenCollapse(!xprops.openCollapse)}>\n";
        $headers_text .= "\t\t\t<ListItemIcon>\n";
        $headers_text .= "\t\t\t\t<AssignmentIcon />\n";
        $headers_text .= "\t\t\t</ListItemIcon>\n";
        $headers_text .= "\t\t\t<ListItemText primary='".$data['pascal_singular']."' />\n";
        $headers_text .= "\t\t\t{xprops.openCollapse ? <ExpandLess /> : <ExpandMore />}\n";
        $headers_text .= "\t\t</ListItemButton>\n";
        $headers_text .= "\t\t<Collapse in={xprops.openCollapse} timeout='auto' unmountOnExit>\n";
        $headers_text .= "\t\t\t<List component='div' disablePadding>\n";
        $headers_text .= "\t\t\t\t<Link to='/".$data['plural_lower']."/list' style={{ textDecoration: 'none', color: theme.palette.text.primary }}>\n";
        $headers_text .= "\t\t\t\t\t<ListItemButton sx={{ pl: 4 }}>\n";
        $headers_text .= "\t\t\t\t\t\t<ListItemIcon>\n";
        $headers_text .= "\t\t\t\t\t\t\t<ListIcon />\n";
        $headers_text .= "\t\t\t\t\t\t</ListItemIcon>\n";
        $headers_text .= "\t\t\t\t\t\t<ListItemText primary='List' />\n";
        $headers_text .= "\t\t\t\t\t</ListItemButton>\n";
        $headers_text .= "\t\t\t\t</Link>\n";
        $headers_text .= "\t\t\t\t<Link to='/".$data['plural_lower']."/add' style={{ textDecoration: 'none', color: theme.palette.text.primary }}>\n";
        $headers_text .= "\t\t\t\t\t<ListItemButton sx={{ pl: 4 }}>\n";
        $headers_text .= "\t\t\t\t\t\t<ListItemIcon>\n";
        $headers_text .= "\t\t\t\t\t\t\t<AddCircleIcon />\n";
        $headers_text .= "\t\t\t\t\t\t</ListItemIcon>\n";
        $headers_text .= "\t\t\t\t\t\t<ListItemText primary='Add' />\n";
        $headers_text .= "\t\t\t\t\t</ListItemButton>\n";
        $headers_text .= "\t\t\t\t</Link>\n";
        $headers_text .= "\t\t\t</List>\n";
        $headers_text .= "\t\t</Collapse>\n";
        $headers_text .= "\t\t\t</>\n";
        $headers_text .= "\t\t\t)}\n";
        $headers_text .= "\t\t/>\n";

        //Agrupo todas as importações em um arquivo
        if ($client->exists('/Layout/Item.js')) {
            $headersFile = $client->get('/Layout/Item.js');
            $appendedHeaders = $headersFile.$headers_text;
            $client->put('/Layout/Item.js', $appendedHeaders);
        } else {
            $client->put('/Layout/Item.js', $headers_text);
        }
        $headers = $client->get('/Layout/Item.js');
        
        // Create the file
        $data = htmlspecialchars($headers);
        $crudTemplate = view::make('crudApi::header',['data' =>$data])->render();
        $client->put('Layout/Header.js', $crudTemplate );

        // Create the additional file
        $crudTemplate = view::make('crudApi::header_additional',['data' =>$data])->render();
        $client->put('Layout/ExpandableItem.js', $crudTemplate );
        
        return;
    
    }

    public static function createFormData($plural) {
    
        $validatorArray = array();
        $vform = '';
        $fieldsArray = array();
        
        $data = DB::select('DESCRIBE '.strtolower($plural));

        foreach ($data as $key) {
            
            $vform .= "\t\t\t\t\t<div class='form-group'>\n";
            $vform .= "\t\t\t\t\t\t<label>".$key->Field."</label>\n";
            
            $thisValidations = array();
            ($key->Null == 'NO') ? '' : array_push($thisValidations,'required');
            
            preg_match_all('!\d+!', $key->Type, $matches);
        
            $lengthValue = (isset($matches[0][0])) ? 'max:'.array_push($thisValidations,'max:'.$matches[0][0]) : '';
            
            $inputLength = (isset($matches[0][0])) ? "maxlength='".$matches[0][0]."'" : '';
            
            $fieldsArray[$key->Field] = '';
            
            if ($thisValidations && $key->Field !== 'id' && $key->Field !== 'created_at' && $key->Field !== 'updated_at') {
            $validatorArray[0][$key->Field] = implode('|',$thisValidations);
            
            if ($key->Null == 'YES') {
                $validatorArray[1][$key->Field.'.required'] = 'Please ensure you have filled in '.Str::kebab($key->Field);
            }
            }
            
            $numericArray = ['tinyiny','smallint','mediumint','int','bigint','decimal','float','double','bit'];
            
            $typeArr = explode("(", $key->Type, 2);
            $type = $typeArr[0];
            
            if (in_array($type,$numericArray)) {
            $vform.="\t\t\t\t\t\t<input type='number' ".$inputLength." placeholder='".$key->Field."' v-model='form.".$key->Field."'/>\n";
            }
            
            $stringArray = ['char','varchar','tinystring'];
            
            if (in_array($type,$stringArray)) {
            $vform.="\t\t\t\t\t\t<input type='text' ".$inputLength." placeholder='".$key->Field."' v-model='form.".$key->Field."'/>\n";
            }
            
            $textAreaArray = ['text','mediumtext','longtext'];
            
            if (in_array($type,$textAreaArray)) {
            
            $vform.="\t\t\t\t\t\t<textarea ".$inputLength." placeholder='".$key->Field."' v-model='form.".$key->Field."'/></textarea>\n";
            }
            
            $dateArray = ['date','timestamp','date','datetime','year'];
            
            if (in_array($type,$dateArray)) {
            $vform.="\t\t\t\t\t\t<input type='date' placeholder='".$key->Field."' v-model='form.".$key->Field."'/>\n";
            }
            
            $enumArray = ['enum'];
            
            if ($type == 'enum') {
            $values = str_replace("'",'',str_replace(')','',str_replace('enum(','',$key->Type)));
            $valuesAr = explode(',',$values);
            $vform.="\t\t\t\t\t\t<select v-model='form.".$key->Field."'>";
            foreach ($valuesAr as $key2) {
                $vform.="<option>".$key2."</option>";
            }
            
            $vform.="</select>\n";
            }
            
            if ($thisValidations) {
            $vform.="\t\t\t\t\t\t<has-error :form='form' field='".$key->Field."'></has-error>\n";
            }
            
            
            $vform .= "\t\t\t\t\t</div>\n\n";

        }
        
        //$validatorArray 
        //$vform 
        //$fieldsArray 
        
        return ['htmlForm'=>$vform,'validator' => $validatorArray,'fields'=>$fieldsArray];
    
    }

}
