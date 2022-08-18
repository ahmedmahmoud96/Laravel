<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class EmailDaly extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user.email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send Email Every Day ';

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
     * @return int
     */
    public function handle()
    {
       $user=User::pluck('email')->toArray();
       foreach ($user as $users){

       }
    }
}
