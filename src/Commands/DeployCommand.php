<?php

namespace Cooper\LaravelDeploy\Commands;

use Illuminate\Console\Command;

class DeployCommand extends Command
{
    protected $signature = 'deploy';
    protected $description = 'Deploy the application using the configured shell script.';

    public function handle()
    {
        $scriptPath = base_path('deploy.sh');
        if (!file_exists($scriptPath)) {
            $this->error('Deploy script not found!');
            return 1;
        }

        $this->info('Running deploy script...');
        $output = shell_exec("sh $scriptPath");

        $this->info($output);
        return 0;
    }
}
