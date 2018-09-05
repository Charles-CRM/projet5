<?php

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
        $this->call(CategoriesTableSeeder::class);

        $users = factory(App\User::class, 5)->create();
        $recipes = factory(App\Recipe::class, 30)->create();
        $preparations = factory(App\Preparation::class, 70)->create();
        $instructions = factory(App\Instruction::class, 175)->create();
        $photos = factory(App\Photo::class, 90)->create();
        $comments = factory(App\Comment::class, 200)->create();
        $flavours = factory(App\Flavour::class, 25)->create();
        $flavour_recipe = factory(App\FlavourRecipe::class, 50)->create();
        $tags = factory(App\Tag::class, 25)->create();
        $recipe_tag = factory(App\RecipeTag::class, 50)->create();
        $ingredients = factory(App\Ingredient::class, 25)->create();
        $ingredient_instruction = factory(App\IngredientInstruction::class, 500)->create();
        
    }
}
