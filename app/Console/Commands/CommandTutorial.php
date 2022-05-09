<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class CommandTutorial extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:tutorial';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Tutorial de como criar um comando no Laravel';

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
        $this->info('Algumas dicas de como criar um comando:');
        $this->info('Em primeiro lugar, para gerar um novo comando basta escrever no console php artisan make:command {nome}');
        $this->info('Então altere o @return int para mixed');
        $this->info('Não é necessário registrar no Kernel ou nenhum outro lugar');
        $this->info('O Kernel já lista todos os comandos que estão na pasta app\Console\Commands por padrão');
        $this->info('Observe o código comentado neste comando para observar as demais dicas');
        $this->newLine();

        // Retornar uma tabela com os campos específicos
        // $table = $this->table(
        //     ['Cabeçalho1', 'Cabeçalho2'],
        //     User::all(['name', 'email'])->toArray()
        // );

        // Capturar o argumento enviado no comando
        // $argument = $this->argument('table');

        // Retornar barra de progresso (o sleep abaixo é só para simular uma tarefa levando 1 segundo a cada loop)
        // Método 1
        // $users = $this->withProgressBar(User::all(), function ($user) {
        //     sleep(1);
        //     $this->newLine();
        //     $this->info($user->name);
        // });

        // Método 2
        // $users = User::all();
        // $bar = $this->output->createProgressBar(count($users));
        // $bar->start();
        // foreach ($users as $user) {
        //     sleep(1);
        //     $this->newLine();
        //     $this->info($user->name);
        //     $bar->advance();
        // }
        // $bar->finish();

        // Mensagens de retorno
        // $this->info('Exemplo');
        // $this->newLine();
        // $this->error('Mensagem de erro padrão');

    }
}
