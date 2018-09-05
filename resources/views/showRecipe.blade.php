<style>
    
    h1 {
        margin-left: 40px;
        font-weight: bold;
        text-decoration: underline;
        font-size: 2rem;
    }

    dt {
        margin-left: 40px;
        font-weight: bold;
    }
    
    dd {
        margin-left: 60px;
        font-style: italic;
    }

</style>




<h1>{{$recipe->title}}</h1>


<dl>
    <dt>id</dt>
        <dd>{{'recette n° ' . $recipe->id}}</dd>
    <dt>auteur</dt>
        <dd>{{$recipe->author->name}}</dd>
    <dt>catégorie</dt>
        <dd>{{$recipe->category->name}}</dd>
    <dt>note</dt>
        <dd>{{$recipe->rating . '/5'}}</dd>
    <dt>nombre d'avis</dt>
        <dd>{{$recipe->votes_nbr}}</dd>
    <dt>difficulté</dt>
        <dd>{{$recipe->difficulty . '/5'}}</dd>
    <dt>nombre de parts</dt>
        <dd>{{$recipe->portions_nbr}}</dd>
    <dt>temps de préparation</dt>
        <dd>{{intdiv($recipe->preparation_time, 60) . 'h' . $recipe->preparation_time % 60}}</dd>
    <dt>temps de repos</dt>
        <dd>{{intdiv($recipe->rest_time, 60) . 'h' . $recipe->rest_time % 60}}</dd>
    <dt>temps de cuisson</dt>
        <dd>{{intdiv($recipe->cooking_time, 60) . 'h' . $recipe->cooking_time % 60}}</dd>
    <dt>publiée ?</dt>
        <dd>{{$recipe->is_published = true ? 'oui' : 'non'}}</dd>
    <dt>date de création</dt>
        <dd>{{$recipe->created_at}}</dd>
</dl>

<span>Liste des préparations :<br /></span>
<ol>
    <?php foreach($recipe->preparations as $preparation) { ?>
        <li>{{$preparation->title}}
            <ol>
                <?php foreach($preparation->instructions as $instruction) { ?>
                    <li>{{$instruction->text}}</li>
                <?php } ?>
            </ol>
        </li>
    <?php } ?>
</ol>


<span>Liste des ingrédients par préparation :<br /></span>
<ol>
    <?php foreach($recipe->preparations as $preparation) { ?>
        <li>{{$preparation->title}}
            <ul>
                <?php foreach($preparation->ingredients as $ingredient) { ?>
                    <li>{{$ingredient->name}}</li>
                <?php } ?>
            </ul>
        </li>
    <?php } ?>
</ol>

<span>Saveurs associées :<br /></span>
<ul>
    <?php foreach($recipe->flavours as $flavour) { ?>
        <li>{{$flavour->name}}</li>
    <?php } ?>
</ul>

<span>Mots-clefs associés :<br /></span>
<ul>
    <?php foreach($recipe->tags as $tag) { ?>
        <li>{{$tag->name}}</li>
    <?php } ?>
</ul>

<span>Liste des commentaires :<br /></span>
<ul>
    <?php foreach($recipe->comments as $comment) { ?>
        <li>{{$comment->message}}</li>
    <?php } ?>
</ul>

<span>Photos associées :<br /></span>
<?php foreach($recipe->photos as $photo) { ?>
    <img src="{{$photo->file_path}}">
<?php } ?>