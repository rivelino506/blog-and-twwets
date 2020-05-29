<?php

use Illuminate\Database\Seeder;
use App\Entry;
use App\User;

class EntriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ///factory(\App\Entry)
        $users = User::all();
        $users-> each(function($user){
         factory(Entry::class, 10)->create([
           'user_id' => $user->id
         ]);

        });

          // factory(Entry::class, 100)->create();

          /*DB::table('users')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);*/

    }
}
