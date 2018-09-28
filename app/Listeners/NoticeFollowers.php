<?php

namespace App\Listeners;

use App\Events\RecipeCreated;
use App\Recipe;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class NoticeFollowers
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  RecipeCreated  $event
     * @return void
     */
    public function handle(RecipeCreated $event)
    {
        echo "Avis à tous les abonnés : " . $event->recipe->author->name . " vient d'écrire une nouvelle recette !";
    }
}
