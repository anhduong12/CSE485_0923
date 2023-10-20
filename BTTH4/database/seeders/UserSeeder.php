<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use app\Models\User;
use app\Models\Profile;

class UserSedder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();
        for($i=0;$i<50;$i++){
            $user = User::create([
                'name' => $faker->name,
                'password' => bcrypt('password123')
            ]);
        }
    }
}
