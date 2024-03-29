<?php

namespace Database\Seeders;



// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Task;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Esteban',
            'email' => 'esteban@gmail.com',
        ]);
        User::factory()->create([
            'name' => 'user1',
            'email' => 'user1@gmail.com',
        ]);
        // User::factory(10)->create();
        // Task::factory(10)->create();

    }
}
