<?php

namespace thepirateorange\Apiarist;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    const CONFIG_PATH = __DIR__ . '/../config/apiarist.php';

    public function boot()
    {
		# Load Routes
	    $this->loadRoutesFrom(__DIR__.'/routes/api.php');

		# Load Migrations
        $this->publishes([
            __DIR__ . '/database/migrations' => $this->app->databasePath() . '/migrations'
        ], 'migrations');

		# Publish Config
        // $this->publishes([
        //     self::CONFIG_PATH => config_path('apiarist.php'),
        // ], 'config');
    }

    public function register()
    {
        // $this->mergeConfigFrom(
        //     self::CONFIG_PATH,
        //     'apiarist'
        // );

		# Bind
        $this->app->bind('apiarist', function () {
            return new Apiarist();
        });
    }
}
