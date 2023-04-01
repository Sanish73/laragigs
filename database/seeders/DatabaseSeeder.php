<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Listing::create([
            'title' =>'Laravel Sinor Developer',
            'tags' =>'laravel Javascript',
            'company' =>'Amp camp',
            'email' => 'emal.email@.com',
            'location'=>'ktm',
            'website' =>'https//www.ace.com',
            'description' =>'Laravel makes connecting with databases and running queries extremely simple. The database configuration file is app/config/database. php . In this file you may define all of your database connections, as well as specify which connection should be used by default.'
        ]);

        Listing::create([
            'title' =>'Laravel Junior Developer',
            'tags' =>'laravel ',
            'company' =>'ttump camp',
            'location' => 'ckt',
            'email' => 'emal.email@.com',
            'website' =>'https//www.ace.com',
            'description' =>'Laravel makes connecting with databases and running queries extremely simple. The database configuration file is app/config/database. php . In this file you may define all of your database connections, as well as specify which connection should be used by d'
        ]);
    }
}
