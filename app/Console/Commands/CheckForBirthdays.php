<?php

namespace App\Console\Commands;

use App\Models\Person;
use Illuminate\Console\Command;

class CheckForBirthdays extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cwb:birthdayCheck';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This is a Birthday Check Command';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //dd(now()->addDays(5)->format('d'));
        $people  =Person::whereMonth('birthday', '=', now()->addDays(5)->format('m'))
            ->whereDay('birthday', '=', now()->addDays(5)->format('d'))
            ->pluck('firstname');
        dd($people);
        
    }
}
