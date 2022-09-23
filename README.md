<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## CRUD Generator

O CRUD Generator foi desenvolvido para o Laravel 9 e React 17

À partir das tabelas do banco de dados, gera tanto os arquivos de back-end:
- **Controllers**
- **Requests**
- **Resources**
- **Models**
- **Repositories**
- **Routes**

Quanto de front-end:
- **App.js**
- **Header.js**
- **Index.js**
- **Edit.js**
- **Add.js**

## Instruções
## Configurações gerais

- [Pastas] No seu projeto original, adicione as pastas:

> /cdn
> /cdn/uploads
> app/Http/Requests
> app/Http/Resources
> app/Repositories
> app/Models

- [CDN] No arquivo config/app após a configuração do env, adicione:

<code>

    /*
    |--------------------------------------------------------------------------
    | Application Content Delivery Network (CDN)
    |--------------------------------------------------------------------------
    |
    | These values help determine the content delivery network (CDN) that
    | will be used for serving assets. By default, we'll use the default
    | Laravel container, but you may specify any other CDN that you like.
    | Set this in your ".env" file.
    |
    */

    'cdn_path' => env('CDN_PATH', '/path/to/cdn'),
    'cdn_url' => env('CDN_URL', '/path/to/url'),

</code>

- [env] No arquivo .env adicione a linha:

<code>

    CDN_PATH=/path/to/your/system/cdn

</code>

- [Exceptions] No arquivo app\Exceptions\Handler, altere o método register para:

<code>

    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });

        $this->renderable(function (NotFoundHttpException $e) {
            return response()->json(['errors' => 'Not found','message' => 'Object not found'], 404);
        });
    }
    
</code>

## Informações

- [Nomenclatura]

Os nomes das pastas devem seguir o padrão do Laravel, estando sempre no plural e de preferência em inglês
Ex.:
Companies
Publications

E no caso de tabelas relacionadas, seguir o padrão 'singular' para o parent_table e '_plural' para o child_table
Ex.: company_publications

- [Validações]

Ficarão gravadas as seguintes validações no Request:

> Required (para os campos NOT NULL)
> Max (com o limite de dígitos do banco de dados)
> Dateformat (para os campos do tipo datetime)
> Date (para os campos do tipo date)
> Integer (para os campos do tipo integer)
> Email (para os campos cujo nome sejam 'email')

- [Status]

Quando houver um campo com nome 'status' é esperado que esteja configurado como 'enum', com a listagem de opções de status
Ficará gravado no Repository um callback retornando o nome de cada opção com a primeira letra maiúscula
O front-end irá listar as opções em um select

- [Active]

Quando houver um campo com nome 'active' é esperado que esteja configurado como 'tinyint' ou 'boolean'
O Repository irá retornar 'Archived' quando for 0 e 'Active' quando for 1
O Resource irá retornar 'true' ou 'false'
O front-end irá tratar como um Switch

- [Appendix,Attachment]

Quando houver uma tabela que possua a palavra 'appendix' ou 'attachment' o Store no Controller irá gravar de forma diferente, salvando o arquivo em cdn/uploads/nomedatabela_nomedoarquivo.extensao
Não será gerado método update
O front-end terá um método próprio para a gravação e exibição do arquivo

- [Date]

Campos de data serão gravados no formato americano (Y-m-d H:i) e retornados no formato brasileiro (d/m/Y H:i)

- [Boolean]

Nos campos do tipo 'boolean' ou 'tinyint' o Resource irá retornar 'true' ou 'false'
O front-end irá tratar como um Switch

- [Options_ENUM]

Será gerada uma listagem de opções para os campos do tipo ENUM
Esta listagem será refletida no front-end
No front-end os campos serão do tipo select

- [Options_Foreign]

Quando houver campos estrangeiros em uma tabela, será gerada uma listagem de opções para estes campos
Por ser o mais comum, o sistema tentará puxar o campo 'name' da tabela relacionada
Se não houver o campo 'name' na tabela relacionada, deve ser corrigido manualmente
Esta listagem será refletida no front-end
No front-end os campos serão do tipo select
