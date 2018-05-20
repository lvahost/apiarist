<?php

namespace thepirateorange\Apiarist;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    const CONFIG_PATH = __DIR__ . '/../config/apiarist.php';

    public function boot()
    {
		# Load Routes
	    $this->loadRoutesFrom(__DIR__.'/routes/main.php');

		# Load Migrations
		$this->loadMigrationsFrom(__DIR__.'/database/migrations');

		# Publish Migrations
        // $this->publishes([
        //     __DIR__ . '/database/migrations' => $this->app->databasePath() . '/migrations'
        // ], 'migrations');

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

		# Load Views
		$this->loadViewsFrom(__DIR__ . '/resources/views', 'apiarist');

		# Bind
        $this->app->bind('apiarist', function () {
            return new Apiarist();
        });
    }
}
