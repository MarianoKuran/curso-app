<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $category1 = new Category;
        $category1->name = 'deportes';
        $category1->description = 'Categoria basada en deportes como: Futbol, Basket, Tennis...';
        $category1->active = true;
        $category1->save();

        $category2 = new Category;
        $category2->name = 'accion';
        $category2->description = 'Categoria basada en juegos repletos de accion';
        $category2->active = true;
        $category2->save();

        $category3 = new Category;
        $category3->name = 'aventura';
        $category3->description = 'Categoria basada en juegos apasionantes y llenos de misterio';
        $category3->active = true;
        $category3->save();
        
        $category4 = new Category;
        $category4->name = 'RPG';
        $category4->description = 'Categoria basada en juegos de rol';
        $category4->active = true;
        $category4->save();
    }
}
