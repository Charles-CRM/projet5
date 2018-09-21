@extends('layouts.app')

@section('content')

<div id="main">
    <form action="/test/nouvelle_recette" method="POST">
        @csrf
        <label for="recipe-title">Titre de la recette</label>
        <input id="recipe-title" type="text" name="recipe-title">
        
        <label for="preparation-name[]">Nom de la préparation</label>
        <input id="preparation-name[]" type="text" name="preparation-name[]">
        <label for="preparation-instructions[]">Préparation n°1</label>
        <textarea id="preparation-instructions[]" class="mytextarea" name="preparation-instructions[]"></textarea>
        
        <label for="preparation-name[]">Nom de la préparation</label>
        <input id="preparation-name[]" type="text" name="preparation-name[]">
        <label for="preparation-instructions[]">Préparation n°2</label>
        <textarea id="preparation-instructions[]" class="mytextarea" name="preparation-instructions[]"></textarea>
        
        <label for="preparation-name[]">Nom de la préparation</label>
        <input id="preparation-name[]" type="text" name="preparation-name[]">
        <label for="preparation-instructions[]">Préparation n°3</label>
        <textarea id="preparation-instructions[]" class="mytextarea" name="preparation-instructions[]"></textarea>
        
        <input type="submit" value="Envoyer">
    </form>
</div>



<!-- TinyMCE -->
<script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
<script>tinymce.init({
  selector: '.mytextarea',
  branding: false,
  statusbar: false,
  height: 120,
  menubar: false,
  toolbar: 'undo redo |  formatselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist | removeformat'
});</script>

@endsection
