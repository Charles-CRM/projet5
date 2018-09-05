<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(['name' => 'Bases et techniques',]);
        DB::table('categories')->insert(['name' => 'Biscuits',]);
        DB::table('categories')->insert(['name' => 'Brioches, pains et viennoiseries',]);
        DB::table('categories')->insert(['name' => 'Crèmes et verrines',]);
        DB::table('categories')->insert(['name' => 'Gâteaux',]);
        DB::table('categories')->insert(['name' => 'Tartes',]);
        DB::table('categories')->insert(['name' => 'Entremets',]);
        DB::table('categories')->insert(['name' => 'Petits-fours et mignardises',]);
        DB::table('categories')->insert(['name' => 'Confiserie',]);
        DB::table('categories')->insert(['name' => 'Carrés',]);
        DB::table('categories')->insert(['name' => 'Autres',]);
    }
}