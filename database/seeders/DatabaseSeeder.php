<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \App\Models\User::factory(20)->create();
        \App\Models\company::factory(20)->create();
        \App\Models\Bransh::factory(20)->create();
        \App\Models\category::factory(20)->create();
        \App\Models\product::factory(20)->create();
        \App\Models\Employee::factory(20)->create();
        \App\Models\Offer::factory(20)->create();


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
