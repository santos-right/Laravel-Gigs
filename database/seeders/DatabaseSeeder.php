<?php

namespace Database\Seeders;

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
        \App\Models\User::factory(5)->create();
        
        Listing::factory(6)->create();
        
        // Listing::create([
        //     'title' => 'Laravel developer',
        //     'tags' => 'laravel', 'api', 'backend',
        //     'company' => 'createlhub',
        //     'email' => 'createlhub@gmail.com',
        //     'website' => 'createlhub.com',
        //     'location' => 'lagos',
        //     'description' => 'individual',
        // ]);
        // Listing::create([
        //     'title' => 'Laravel developer',
        //     'tags' => 'laravel', 'api', 'backend',
        //     'company' => 'createlhub',
        //     'email' => 'createlhub@gmail.com',
        //     'website' => 'createlhub.com',
        //     'location' => 'lagos',
        //     'description' => 'individual',
        // ]);
    }
}
