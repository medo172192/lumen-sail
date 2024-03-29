<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;

class ServeCommand extends Command
{
    protected $name = 'serve';
    protected $description = "Serve the application on the PHP development server";

    public function handle()
    {
        $host = $this->input->getOption('host');
        $port = $this->input->getOption('port');
        $base = $this->laravel->basePath();

        $this->info("Lumen development server started on http://{$host}:{$port}/");

        passthru('"' . PHP_BINARY . '"' . " -S {$host}:{$port} -t \"{$base}/public\"");
    }

    protected function getOptions()
    {
        $url = env('APP_URL');

        return [
            [
                'host', null, InputOption::VALUE_OPTIONAL, 'The host address to serve the application on.', parse_url($url, PHP_URL_HOST)
            ], [
                'port', null, InputOption::VALUE_OPTIONAL, 'The port to serve the application on.', parse_url($url, PHP_URL_PORT)
            ],
        ];
    }
}
