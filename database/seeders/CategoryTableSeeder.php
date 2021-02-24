<?php

namespace Database\Seeders;

use App\Models\Category;
use Faker\Guesser\Name;
use Illuminate\Database\Seeder;
use Webpatser\Uuid\Uuid;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 1000; $i++) {
            Category::create([
                'uuid' => Uuid::generate()->string,
                'name' => $faker->word,
            ]);
        }
    }
}
