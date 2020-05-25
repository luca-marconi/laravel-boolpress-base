<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;
use Faker\Generator as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10 ; $i++) {
            $user = new User;
            $user->name = $faker->name();
            $user->email = $faker->email();
            $user->password = Hash::make('Pippo250_1');
            $user->save();            
        }
    }
}
