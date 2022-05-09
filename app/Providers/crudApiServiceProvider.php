<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class crudApiServiceProvider extends ServiceProvider
{
  
    protected $commands = [
        //
    ];
  
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
      
      $this->mergeConfigFrom(
        base_path('config/crudApi.php'), 'crudApi'
      );
    
        $this->commands($this->commands);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        
        $this->loadViewsFrom( base_path('templates'), 'crudApi');
        
        $this->publishes([
            base_path('config/crudApi.php') => config_path('crudApi.php'),
         ], 'config');
        
        $this->publishes([
            base_path('templates') => resource_path('views/vendor/crudApi'),
       ],'templates');
         
    }
    
}