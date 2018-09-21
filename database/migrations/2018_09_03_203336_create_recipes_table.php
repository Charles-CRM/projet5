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
            $table->Increments('id');
            $table->string('title');
            $table->unsignedTinyInteger('portions_nbr')->default(1);
            $table->unsignedTinyInteger('rating')->default(0);
            $table->unsignedSmallInteger('votes_nbr')->default(0);
            $table->unsignedTinyInteger('difficulty')->default(0);
            $table->unsignedSmallInteger('preparation_time')->default(0);
            $table->unsignedSmallInteger('rest_time')->default(0);
            $table->unsignedSmallInteger('cooking_time')->default(0);
            $table->boolean('is_published')->default(0);
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
