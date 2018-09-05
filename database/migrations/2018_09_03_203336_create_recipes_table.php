<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->unsignedTinyInteger('portions_nbr');
            $table->unsignedTinyInteger('rating');
            $table->unsignedSmallInteger('votes_nbr');
            $table->unsignedTinyInteger('difficulty');
            $table->unsignedSmallInteger('preparation_time');
            $table->unsignedSmallInteger('rest_time');
            $table->unsignedSmallInteger('cooking_time');
            $table->boolean('is_published');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipes');
    }
}
