<?php

namespace Cooper\LaravelDeploy;

use Illuminate\Support\ServiceProvider;

class DeployServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/Config/deploy.php', 'deploy');
        $this->commands([
            \Cooper\LaravelDeploy\Commands\DeployCommand::class,
            \Cooper\LaravelDeploy\Commands\SetupDeploymentCommand::class,
        ]);
    }

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/Config/deploy.php' => config_path('deploy.php')
        ], 'deploy-config');
    }
}
