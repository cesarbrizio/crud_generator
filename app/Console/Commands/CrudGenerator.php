<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Helper\ProgressBar;
use App\Models\Crud;
use Str;

class CrudGenerator extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:crud {table}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new CRUD with Route Model Controller and React Elements';

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
        $this->info('Iniciou ' . date('d/m/Y H:i'));

        $lower = $this->argument('table');
        $singular = Ucfirst(Str::singular($lower));
        
        $data = Crud::getFieldsData($singular, $lower);
        if ($data === FALSE) {
            $this->alert('A tabela informada não existe');
            die();
        }
         
        Crud::createRoutes($data);
        $this->info('Rotas criadas');
        
        Crud::createModel($data);
        $this->info('Model criado');

        Crud::createRepository($data);
        $this->info('Repository criado');

        Crud::createController($data);
        $this->info('Controller criado');

        Crud::createResource($data);
        $this->info('Resource criado');

        Crud::createRequest($data);
        $this->info('Request criado');

        Crud::createIndexComponentTemplate($data);
        $this->info('Component Index criado');

        Crud::createEditComponentTemplate($data);
        $this->info('Component Edit criado');

        Crud::createAddComponentTemplate($data);
        $this->info('Component Add criado');

        Crud::createAppComponentTemplate($data);
        $this->info('Component App criado');

        Crud::createHeaderComponentTemplate($data);
        $this->info('Component Header criado');
        
        $this->info('Atenção!');
        $this->info('Se a tabela possuir status, edite os tipos de status no Repository');
        $this->info('É necessário jogar os componentes para a pasta do browser, adicionar as informações no App.js e no Header');

        $this->info('Terminou ' . date('d/m/Y H:i'));

    }
}
