<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class StartSwooleServer extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'start:swoole';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Start the Swoole server';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->laravel['swoole.http']->start();
    }
}
