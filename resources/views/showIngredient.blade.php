<span>Liste des recettes associées à l'ingrédient "{{$ingredient->name}}" (obtenue via hasManyThrough) :<br /></span>
<ul>
    <?php foreach($ingredient->recipes as $recipe) { ?>
        <li>{{$recipe->title}}</li>
    <?php } ?>
</ul>