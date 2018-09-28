window.addEventListener("load", function() {

document.getElementById("new-preparation-button").addEventListener('click', function(){
  var preparation_number = document.getElementsByClassName("preparation").length + 1;
  document.getElementById("preparations").innerHTML += "<div class='preparation'><label for='preparation-name-'" + preparation_number + "'>Nom de la préparation</label><input id='preparation-name-'" + preparation_number + "' type='text' name='preparation-name[]'><label for='preparation-instructions-'" + preparation_number + "'>Préparation n°" + preparation_number + "</label><textarea id='preparation-instructions-'" + preparation_number + "' class='tinyMCEtextarea' name='preparation-instructions[]'></textarea><button class='delete-preparation-button'>Supprimer la préparation</button></div>";

  buttonsEventsListeners();

  tinymce.init({
    selector: '.tinyMCEtextarea',
    branding: false,
    statusbar: false,
    height: 120,
    menubar: false,
    toolbar: 'undo redo |  formatselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist | removeformat'
  });
});

});

function buttonsEventsListeners() {
  for (var i = 0; i < document.getElementsByClassName("delete-preparation-button").length; i++) {
    document.getElementsByClassName("delete-preparation-button")[i].addEventListener('click', function() {
      document.getElementsByClassName("delete-preparation-button")[i].parentNode.parentNode.removeChild(document.getElementsByClassName("preparation")[i+1]);
    })

  }
}
