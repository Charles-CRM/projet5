<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoriesTableSeeder::class);

        $users = factory(App\User::class, 5)->create();
        $recipes = factory(App\Recipe::class, 30)->create();
        $preparations = factory(App\Preparation::class, 70)->create();
        $photos = factory(App\Photo::class, 90)->create();
        $comments = factory(App\Comment::class, 200)->create();
        $flavours = factory(App\Flavour::class, 25)->create();
        $flavour_recipe = factory(App\FlavourRecipe::class, 50)->create();
        $tags = factory(App\Tag::class, 25)->create();
        $recipe_tag = factory(App\RecipeTag::class, 50)->create();
        $ingredients = factory(App\Ingredient::class, 25)->create();
        $ingredient_preparation = factory(App\IngredientPreparation::class, 300)->create();
        
        
        
        DB::table('users')->insert(['name' => 'SimpleUtilisateur', 'email' => 'simpleadressemail@mail.com', 'password' => bcrypt('SimpleMotDePasse')]);
        
    }
}
