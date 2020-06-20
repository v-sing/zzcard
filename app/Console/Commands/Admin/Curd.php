<?php

namespace App\Console\Commands\Admin;

use Illuminate\Console\Command;

class Curd extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:curd';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '一键生成CURD';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
    }
}
