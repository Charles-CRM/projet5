@extends('layouts.app')

@section('content')

<div id="main">
  <form action="/test/nouvelle_recette" method="POST">
    @csrf
    <label for="recipe-title">Titre de la recette</label>
    <input id="recipe-title" type="text" name="recipe-title">

    <div id="preparations">
      <div class="preparation">
        <label for="preparation-name-1">Nom de la préparation</label>
        <input id="preparation-name-1" type="text" name="preparation-name[]">
        <label for="preparation-instructions-1">Préparation n°1</label>
        <textarea id="preparation-instructions-1" class="tinyMCEtextarea" name="preparation-instructions[]"></textarea>
      </div>
    </div>
    <input id="new-preparation-button" type="button" value="Ajouter une préparation">

    <input type="number" name="portions_nbr"/>

    <select name="category">
      <option value="1">Cat n°1 : Bases et techniques</option>
      <option value="3">Cat n°3 : Brioches, pains et viennoiseries</option>
      <option value="8">Cat n°8 : Petits-fours et mignardises</option>
      <option value="7">Cat n°7 : Entremets</option>
      <option value="10">Cat n°10 : Carrés</option>
    </select>

    <input type="submit" value="Envoyer">
  </form>
</div>



<!-- TinyMCE -->
<script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
<script src="js/tinyMCE_init.js"></script>
<script src="js/home.js"></script>

@endsection
