<?php

namespace Database\Seeders;

use App\Models\listings;

use App\Models\fruit;
use App\Models\userdatas;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'age'=>'19'
        ]);
        userdatas::create([
            'name'=>'Peter',
            'email'=>'peter@gmail.com',
            'age'=>'35',
            'gender'=>'male',
            'phone_number'=>'1234567890',
            'address'=>'123 Main ST',
            'city'=>'peneng',
            'state'=>'BM'
        ]);
        userdatas::create([
            'name'=>'jane',
            'email'=>'jane@gmail.com',
            'age'=>'25',
            'gender'=>'female',
            'phone_number'=>'1212121212121',
            'address'=>'123 Main ST',
            'city'=>'johor',
            'state'=>'johor baru'
        ]);
        userdatas::create([
            'name'=>'alex',
            'email'=>'alex@gmail.com',
            'age'=>'19',
            'gender'=>'male',
            'phone_number'=>'1332323232',
            'address'=>'123 Main ST',
            'city'=>'kedah',
            'state'=>'kulim'
        ]);
        //laravel part 4 start
        listings::create([
            'title'=>'laravel Senior Development',
            'user_id'=>1,
            'age_limit'=>19,
            'tag'=>'laravel,javascript',
            'company'=>'Acme Corp',
            'location'=>'Malaysia',
            'email'=>'email@email.com',
            'website'=>'https://www.acme.com',
            'description'=>'hat first winter, it rains and rains as if we have moved to some foreign place, away from the desert; it rains and it rains, and the water comes up to the back step and I think it will enter the house'
        ]);

        listings::create([
            'title'=>'laravel Junior Development',
            'user_id'=>1,
            'age_limit'=>19,
            'tag'=>'laravel,html',
            'company'=>'Acme Corp',
            'location'=>'England',
            'email'=>'email@email.com',
            'website'=>'https://www.acme.com',
            //'logo'=>'',
            'description'=>'hat first winter, it rains and rains as if we have moved to some foreign place, away from the desert; it rains and it rains, and the water comes up to the back step and I think it will enter the house'
        ]);
        //laravel part 4 End

        //laravel part 5.2 start
        fruit::create([
            'f_name'=>'apple',
            'quantity'=>'100',
            'price'=>'30'
        ]);
        fruit::create([
            'f_name'=>'orange',
            'quantity'=>'150',
            'price'=>'20'
        ]);
        //laravel part 5.2 End

    }
}
