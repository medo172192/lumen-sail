<?php

namespace App\Console\Commands;

use Illuminate\Support\Facades\Cache;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ClearCacheCommand extends Command
{
    protected $signature = 'cache:clear';
    protected $description = 'Clear the application cache';

    public function __construct()
    {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        Cache::flush();
        $output->writeln('Application cache cleared!');
        return Command::SUCCESS;
    }
}
