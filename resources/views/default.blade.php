<!--**********************************************************************************

                                    Background

***********************************************************************************-->

<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    
    <link rel="stylesheet" href="/css/global.css" />
    <link rel="stylesheet" href="/css/default.css" />
    <link rel="stylesheet" href="/css/homepage.css" />
    <link rel="stylesheet" href="/css/recipe.css" />
    
    <title>{{ $title }}</title>
</head>


<body>
    
<div id='main'>
    <header id="navbar">
        <a href='/' target='_self'><div id='logo'>Logo</div></a>
        <div id='topMenu'>
            <input id='topMenuSearchBar' name='topMenuSearchbar' value='Rechercher'>
            <a href='/user' target='_self'><button id='userAccountButton'><i class="fas fa-user"></i><span>Se connecter</span></button></a>
            <button id='completeMenuButton'><i class="fas fa-bars"></i></button>
        </div>
        <nav id='bottomMenu'>
            <ul>
                <?php foreach($categories as $category) { ?>
                    <li><a href='/category/{{$category->id}}' target='_self'>{{$category->name}}</a></li>
                <?php } ?>
            </ul>
        </nav>
    </header>
    

    <!--<nav id="navbar" class="navbar">
        <a href='./' target='_self' class="navbar-brand"><div id='logo'>Logo</div></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id='topMenu'>
            <input id='topMenuSearchBar' name='topMenuSearchbar' value='Rechercher'>
            <a href='./user' target='_self'><button id='userAccountButton'><i class="fas fa-user"></i><span>Se connecter</span></button></a>
            <button id='completeMenuButton'><i class="fas fa-bars"></i></button>
        </div>
        <div id='bottomMenu' clas="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href='./category/entremets' target='_self'>Entremets</a></li>
                <li class="nav-item"><a class="nav-link" href='./category/gateaux' target='_self'>Gâteaux</a></li>
                <li class="nav-item"><a class="nav-link" href='./category/tartes' target='_self'>Tartes</a></li>
                <li class="nav-item"><a class="nav-link" href='./category/verrines' target='_self'>Verrines</a></li>
                <li class="nav-item"><a class="nav-link" href='./category/viennoiseries' target='_self'>Viennoiseries</a></li>
            </ul>
        </div>
    </nav>-->

   
   
    @yield('mainContent')
    
</div>

<!--
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
-->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
