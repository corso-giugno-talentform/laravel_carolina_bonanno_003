<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
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

        User::factory()->create([
            'name' => 'Carolina',
            'email' => 'caro.bon98@gmail.com',
        ]);

        User::factory(1000)->create();
        Author::factory(10)->create();
        Category::factory(10)->create();
        Book::factory(300)->hasAuthor()->create(); //hasCategory() non funziona
    }
}
