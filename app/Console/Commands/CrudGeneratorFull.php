<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Helper\ProgressBar;
use DB;
use App\Models\Crud;
use Str;

class CrudGeneratorFull extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:crud_full';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a CRUD with Route Model Controller and React Elements for all tables';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info("Iniciou " . date('d/m/Y H:i'));

        $tables = \DB::select('SHOW TABLES');
        $ignore_tables = [
            'migrations',
            'users',
            'password_resets',
            'groups',
            'user_groups',
            'permissions',
            'group_permissions',
            'failed_jobs',
            'personal_access_tokens',
        ];

        $bar = new ProgressBar($this->output, count($tables));

        $ignore = false;
        
        foreach ($tables as $table) {
            $db_name = 'Tables_in_' . env('DB_DATABASE');
            $table_name = $table->$db_name;

            if (in_array($table_name, $ignore_tables)) {
                continue;
            }

            $dir = scandir(config('crudApi.model_dir'));
            $model_name = Str::studly(Str::singular($table_name)) . '.php';
            if (in_array($model_name, $dir)) {
                if ($ignore) {
                    continue;
                }

                $this->alert("A tabela $table_name já existe");
                $choice = $this->choice('Deseja ignorá-la?', ['s' => 'Sim', 'n' => 'Não', 't' => 'Ignorar todas as tabelas já existentes'], null);

                if ($choice === 't') {
                    $ignore = true;
                    continue;
                }

                if ($choice === 's') {
                    continue;
                }
            }

            $this->callSilently('make:crud', [
                'table' => $table_name
            ]);

            $bar->advance();
        }

        $bar->finish();

        $this->info("\nTerminou " . date('d/m/Y H:i'));

    }
}
