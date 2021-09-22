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
            'title' => 'Составление документов'
        ]);
        Category::factory()->create([
            'title' => 'Жилищные'
        ]);
        Category::factory()->create([
            'title' => 'Семейные'
        ]);
        Category::factory()->create([
            'title' => 'Имущество'
        ]);
        Category::factory()->create([
            'title' => 'Наследство'
        ]);
        Category::factory()->create([
            'title' => 'Земельные'
        ]);
        Category::factory()->create([
            'title' => 'Страхование'
        ]);
        Category::factory()->create([
            'title' => 'Установка фактов'
        ]);
        Category::factory()->create([
            'title' => 'Финансовые'
        ]);
        Category::factory()->create([
            'title' => 'Исполнительное'
        ]);
        Category::factory()->create([
            'title' => 'Трудовые'
        ]);
        Category::factory()->create([
            'title' => 'Обжалование'
        ]);
        Category::factory()->create([
            'title' => 'Разное'
        ]);


        for ($i = 1; $i < 6; $i++) {
            Service::factory()->create([
                'title' => 'Разная услуга ' . $i,
                'category_id' => 1,
                'price' => rand(500, 10000)
            ]);
        }

        for ($i = 1; $i < 6; $i++) {
            Service::factory()->create([
                'title' => 'Жилищная услуга ' . $i,
                'category_id' => 2,
                'price' => rand(500, 10000)
            ]);
        }

        for ($i = 1; $i < 6; $i++) {
            Service::factory()->create([
                'title' => 'Составление документов услуга ' . $i,
                'category_id' => 3,
                'price' => rand(500, 10000)
            ]);
        }
    }
}
