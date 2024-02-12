<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect(['Classic', 'Thriller', 'Fantasy', 'Science'])
            ->each(fn($category) => Category::create(['title' => $category]));
    }
}
