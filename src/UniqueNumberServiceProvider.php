<?php
namespace Iantoo\LaravelUniqueNumber;

use Illuminate\Support\ServiceProvider;
use Iantoo\LaravelUniqueNumber\Commands\UniqueNumberCommand;

class UniqueNumberServiceProvider extends ServiceProvider {

    public function register(){
        // Register main class to use with the facade
        $this->app->singleton('unique-number', function () {
            return new UniqueNumber();
        });
    }

    public function boot(){
        // Register the command
        if( $this->app->runningInConsole()){
            $this->commands([
                UniqueNumberCommand::class,
            ]);
        }
    }
}