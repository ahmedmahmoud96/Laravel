<?php

namespace App\Console\Commands;

use app\Models\User;
use Illuminate\Console\Command;

class expir extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user.expire';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Expire user after 5 minuet';

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
        $user=User::where('expire',0)->get();
        foreach ($user as $users){
            $users->update(['expire'=>1]);
        }
    }
}
