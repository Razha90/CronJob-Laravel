<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MyCronJob extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'my:cronjob';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        app()->call('App\Http\Controllers\UpdateData@createUser');
    }
}
