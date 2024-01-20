<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Task;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    
    public function run(): void
    {

        $this->call([
            UserSeeder::class,
        ]);

        Category::factory(5)->create();
        Task::factory(50)->create();
    }
}
