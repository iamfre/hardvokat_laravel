<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Service;
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
        $faker = \Faker\Factory::create();

        Category::factory()->create([
            'title' => 'Представительство интересов в суде по гражданским делам, по делам об административных правонарушениях'
        ]);
        Category::factory()->create([
            'title' => 'Составление исковых заявлений, жалоб, иных процессуальных документов'
        ]);
        Category::factory()->create([
            'title' => 'Обжалование постановлений об административных правонарушениях'
        ]);
        Category::factory()->create([
            'title' => 'Составление договоров'
        ]);
        Category::factory()->create([
            'title' => 'Разное'
        ]);


        for ($i = 1; $i < 6; $i++) {
            Service::factory()->create([
                'title' => 'Представительство интересов в суде ' . $i,
                'category_id' => 1,
                'price' => rand(500, 10000)
            ]);
        }

        for ($i = 1; $i < 6; $i++) {
            Service::factory()->create([
                'title' => 'Составление исковых заявлений ' . $i,
                'category_id' => 2,
                'price' => rand(500, 10000)
            ]);
        }

        for ($i = 1; $i < 6; $i++) {
            Service::factory()->create([
                'title' => 'Обжалование постановлений об административных правонарушениях ' . $i,
                'category_id' => 3,
                'price' => rand(500, 10000)
            ]);
        }

        for ($i = 1; $i < 6; $i++) {
            Service::factory()->create([
                'title' => 'Составление договоров услуга ' . $i,
                'category_id' => 4,
                'price' => rand(500, 10000)
            ]);
        }

        for ($i = 1; $i < 6; $i++) {
            Service::factory()->create([
                'title' => 'Разная услуга ' . $i,
                'category_id' => 5,
                'price' => rand(500, 10000)
            ]);
        }
    }
}
