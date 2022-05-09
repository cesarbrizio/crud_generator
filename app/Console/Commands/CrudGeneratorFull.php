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

        foreach ($tables as $table) {
            //Rename "database" to your database name
            $table_name = $table->Tables_in_database;

            if (in_array($table_name, $ignore_tables)) {
                continue;
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
