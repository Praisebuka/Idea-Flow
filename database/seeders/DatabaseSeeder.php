<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Idea;
use App\Models\Problem;
use App\Models\ProblemComments;
use Illuminate\Database\Seeder;
use \App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
     $user=User::all()->first();
     Idea::factory(13)->create([ 
    'user_id'=>$user->id,
    'author'=>$user->username,
     'email'=>$user->email
     ]);

  $Problemuser=User::all();
     $Problemuser=$Problemuser[1];
    $problem= Problem::factory(33)->create([ 
    'user_id'=>$Problemuser->id,
    'author'=>$Problemuser->username
     ]);   
    
   

     $this->call(
[
    solutionSeeder::class
]
     );
}
   
}
