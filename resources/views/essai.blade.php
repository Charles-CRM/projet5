<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    
    <title>Page d'essais</title>
</head>


<body>



<?php

$category = App\Recipe::find(15)->category->name;

$recipes = App\Category::find(3)->recipes;

?>


<span><strong>Catégorie :</strong><br /></span>
<span>{{ $category }}<br /><br /></span>



<span><strong>Recettes associées :</strong><br /></span>
<ul>
    <?php
        foreach ($recipes as $recipe) {
    ?>
            <li>{{ $recipe->title }}<br /></li>
    <?php
        }
    ?>
</ul>



<span><strong>Recettes écrites par "{{App\User::find(1)->name}}" :</strong><br /></span>
<ul>
    <?php
        foreach (App\User::find(1)->recipes as $recipe) {
    ?>
            <li>{{ $recipe->title }}<br /></li>
    <?php
        }
    ?>
</ul>

<!-- Flavours -->

<span><strong>Saveurs de la recette "{{App\Recipe::find(4)->title}}" :</strong><br /></span>
<ul>
    <?php
        foreach (App\Recipe::find(4)->flavours as $flavour) {
    ?>
            <li>{{ $flavour->name }}<br /></li>
    <?php
        }
    ?>
</ul>



<span><strong>Recettes associées à la saveur "{{App\Flavour::find(3)->name}}" :</strong><br /></span>
<ul>
    <?php
        foreach (App\Flavour::find(3)->recipes as $recipe) {
    ?>
            <li>{{ $recipe->title }}<br /></li>
    <?php
        }
    ?>
</ul>

<!-- Tags -->

<span><strong>Mots-clefs de la recette "{{App\Recipe::find(2)->title}}" :</strong><br /></span>
<ul>
    <?php
        foreach (App\Recipe::find(2)->tags as $tag) {
    ?>
            <li>{{ $tag->name }}<br /></li>
    <?php
        }
    ?>
</ul>



<span><strong>Recettes associées au mot-clef "{{App\Tag::find(3)->name}}" :</strong><br /></span>
<ul>
    <?php
        foreach (App\Tag::find(3)->recipes as $recipe) {
    ?>
            <li>{{ $recipe->title }}<br /></li>
    <?php
        }
    ?>
</ul>

<!-- Instructions -->

<span><strong>Ingrédients de l' instruction "{{App\Instruction::find(2)->text}}" :</strong><br /></span>
<ul>
    <?php
        foreach (App\Instruction::find(2)->ingredients as $ingredient) {
    ?>
            <li>{{ $ingredient->name }}<br /></li>
    <?php
        }
    ?>
</ul>



<span><strong>Instructions associées à l'ingrédient "{{App\Ingredient::find(3)->name}}" :</strong><br /></span>
<ul>
    <?php
        foreach (App\Ingredient::find(3)->instructions as $instruction) {
    ?>
            <li>{{ $instruction->text }}<br /></li>
    <?php
        }
    ?>
</ul>



</body>
</html>