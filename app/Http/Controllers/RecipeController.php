<?php

namespace App\Http\Controllers;

use App\Recipe;
use App\Preparation;
use App\Events\RecipeCreated;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $recipe_title = $request->input('recipe-title');
        $preparation_name = $request->input('preparation-name');
        $preparation_instructions = $request->input('preparation-instructions');
        $category_id = $request->input('category');
        $portions_nbr = $request->input('portions_nbr');

        echo 'Le titre de la recette est : ' . $recipe_title . "<br/><br/>";

        $i = 0;
        while(isset($preparation_name[$i])) {
            echo "<br/>Nom de la préparation : " . $preparation_name[$i] . "<br/>";
            echo "Instructions : " . $preparation_instructions[$i];

            $i++;
        }

        $recipe = Recipe::create(['title' => $recipe_title]);

        $j = 0;
        while(isset($preparation_name[$j])) {
            Preparation::create(['recipe_id' => $recipe->id, 'name' => $preparation_name[$j], 'instructions' => $preparation_instructions[$j]]);

            $j++;
        }

        echo 'Le titre de la recette est : ' . $recipe->title . "<br/><br/>";

        foreach($recipe->preparations as $preparation) {
            echo "<br/>Nom de la préparation : " . $preparation->name . "<br/>";
            echo "Instructions : " . $preparation->instructions;
        }

        $recipe->portions_nbr = $portions_nbr;

        // Associate the recipe to the current user.
        $recipe->category()->associate($category_id);

        // Associate the recipe to the current user.
        $recipe->author()->associate(auth()->user());
        $recipe->save();



        // ATTENTION, temporaire : attachement à des mots-clefs arbitrairements choisis.
        $recipe->tags()->attach([17, 2, 8]);

        // Event
        event(new RecipeCreated($recipe));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $recipe = Recipe::with(['preparations.ingredients'])->find($id);

        $layout = layoutController::show($recipe->title);
        return view('recipe', ['layout' => $layout, 'recipe' => $recipe]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipe $recipe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recipe $recipe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipe $recipe)
    {
        //
    }
}
