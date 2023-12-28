<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Adventure;
use App\Models\Category;
use App\Models\Difficulties;
use App\Models\Difficulty;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // User::create([
        //     'name' => 'Achmad Ifal',
        //     'email' => 'achmadifal@gmail.com',
        //     'password' => bcrypt('AchmadIfal')
        // ]);

        // User::create([
        //     'name' => 'Al Farazy',
        //     'email' => 'alfarazy@gmail.com',
        //     'password' => bcrypt('AlFarazy')
        // ]);
        Adventure::factory(20)->create();

        User::factory(3)->create();

        Category::create([
            'name' => 'Hiking',
            'slug' => 'hiking'
        ]);

        Category::create([
            'name' => 'Snorkeling ',
            'slug' => 'snorkeling '
        ]);

        Category::create([
            'name' => 'Mountain Biking',
            'slug' => 'mountain-biking'
        ]);

        Category::create([
            'name' => 'Camping',
            'slug' => 'camping'
        ]);

        Category::create([
            'name' => 'Rafting',
            'slug' => 'rafting'
        ]);

        Difficulty::create([
            'name' => 'Beginner',
            'slug' => 'beginner'
        ]);

        Difficulty::create([
            'name' => 'Amateur',
            'slug' => 'amateur'
        ]);

        Difficulty::create([
            'name' => 'Professional',
            'slug' => 'professional'
        ]);


    }
}
