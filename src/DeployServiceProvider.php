<?php

namespace Cooper\LaravelDeploy;

use Illuminate\Support\ServiceProvider;

class DeployServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->commands([
            \Cooper\LaravelDeploy\Commands\DeployCommand::class,
            \Cooper\LaravelDeploy\Commands\SetupDeploymentCommand::class,
        ]);
    }

    public function boot()
    {
    }
}
