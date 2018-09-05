<span><strong>Liste des recettes :</strong><br /></span>
<ol>
    <?php
        foreach ($recipes as $recipe) {
    ?>
            <li><a href="/test/{{$recipe->id}}" target="_self">{{ $recipe->title }}</a></li>
    <?php
        }
    ?>
</ol>