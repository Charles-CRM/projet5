@extends('default')

@section('mainContent')


    <section id='searchBarSection'>
        <img src="/images/Bandeau accueil.jpg" class="img-fluid" alt="image de fond">
        <div id='searchBarContainer'>
            <label for='searchBar'>Tapez votre recherche</label>
            <input type='text' id='searchBar' name='searchBar' value="Rechercher">
            <a href='#'>Recherche avancée</a>
        </div>
    </section>
    
    
    <section class="container-fluid" id='highlightedRecipesSection'>
        <div class="row">
           
           <!-- Recipe of the Day : for all screens but large ones -->
            <div class="recipeLinkContainer d-lg-none col-md-8 col-sm-12 recipeOfTheDayLinkContainer">
                <a href='/recipe/choux-creme-fruits-rouges' target='_self' class="recipeOfTheDayLink card">
                    <article id='recipeOfTheDay'>
                        <div class="titleBanner"><h3>Recette du jour</h3><ul class='socialNetworksButtons'><li><i class="fab fa-facebook"></i></li><li><i class="fab fa-google-plus-g"></i></li><li><i class="fab fa-pinterest"></i></li><li><i class="fab fa-instagram"></i></li></ul></div>
                        <div id="recipeOfTheDayContent">
                            <div class="imageContainer">
                                <div class="square recipeOfTheDayImage">
                                    <img src='/images/chou.jpg' alt='chou' />
                                </div>
                            </div>
                            <div class='recipeInfos'>
                                <h3>Choux crème-fruits-rouges</h3>
                                <div>
                                    <span class='label flavoursLabel'>Saveurs</span>
                                    <ul class='flavours'><li><span class="badge red-fruits-badge">fruits-rouges</span></li><li><span class="badge vanilla-badge">vanille</span></li></ul>
                                </div>
                                <ul class='times'><li>Préparation : 30 min</li><li>Cuisson : 20 min</li></ul>
                                <div class='difficultyAndNoteContainer'>
                                    <div class='difficultyInfos'>
                                       <span class='label'>Difficulté<br/></span>
                                       <span><i class="fas fa-circle"></i><i class="fas fa-circle"></i><i class="far fa-circle"></i><i class="far fa-circle"></i><i class="far fa-circle"></i></span>
                                    </div>
                                    <div class='noteInfos'>
                                        <span class='label'>Note<br/></span>
                                        <span><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </a>
            </div>
            
            <div class="recipeLinkContainer col-lg-3 col-md-4 col-sm-6">
                <div class="recipeLinkSizerContainer">
                    <div class="recipeLinkSizer square">
                        <a href="{{route('recipe', ['title' => 'cheesecake'])}}" target='_self' class="highlightedRecipeLink attachedToPreviousElement">
                            <article id='highlightedRecipe-1' class='highlightedRecipe'>
                                <img src='/images/Cheesecake.jpg' alt='cheesecake' />
                                <div class="titleBox"><h3>Cheesecake</h3></div>
                            </article>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Recipe of the Day : only for large screens -->
            <div class="recipeLinkContainer d-none d-lg-block col-lg-6 recipeOfTheDayLinkContainer">
                <a href='/recipe/choux-creme-fruits-rouges' target='_self' class="recipeOfTheDayLink card">
                    <article id='recipeOfTheDay'>
                        <div class="titleBanner"><h3>Recette du jour</h3><ul class='socialNetworksButtons'><li><i class="fab fa-facebook"></i></li><li><i class="fab fa-google-plus-g"></i></li><li><i class="fab fa-pinterest"></i></li><li><i class="fab fa-instagram"></i></li></ul></div>
                        <div id="recipeOfTheDayContent">
                            <div class="imageContainer">
                                <div class="square recipeOfTheDayImage">
                                    <img src='/images/chou.jpg' alt='chou' />
                                </div>
                            </div>
                            <div class='recipeInfos'>
                                <h3>Choux crème-fruits-rouges</h3>
                                <div>
                                    <span class='label flavoursLabel'>Saveurs</span>
                                    <ul class='flavours'><li><span class="badge red-fruits-badge">fruits-rouges</span></li><li><span class="badge vanilla-badge">vanille</span></li></ul>
                                </div>
                                <ul class='times'><li>Préparation : 30 min</li><li>Cuisson : 20 min</li></ul>
                                <div class='difficultyAndNoteContainer'>
                                    <div class='difficultyInfos'>
                                       <span class='label'>Difficulté<br/></span>
                                       <span><i class="fas fa-circle"></i><i class="fas fa-circle"></i><i class="far fa-circle"></i><i class="far fa-circle"></i><i class="far fa-circle"></i></span>
                                    </div>
                                    <div class='noteInfos'>
                                        <span class='label'>Note<br/></span>
                                        <span><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </a>
            </div>
            
            <div class="recipeLinkContainer col-lg-3 col-md-4 col-sm-6">
                <div class="recipeLinkSizerContainer">
                    <div class="recipeLinkSizer square">
                        <a href='/recipe/gateau-suedois-au-chocolat' target='_self' class="highlightedRecipeLink attachedToPreviousElement">
                            <article id='highlightedRecipe-2' class='highlightedRecipe'>
                                <img src='/images/G%C3%A2teau%20su%C3%A9dois%20au%20chocolat.jpg' alt='gâteau suédois au chocolat' />
                                <div class="titleBox"><h3>Gâteau suédois au chocolat</h3></div>
                            </article>
                        </a>
                    </div>
                </div>
            </div>
            <div class="recipeLinkContainer col-lg-3 col-md-4 col-sm-6">
                <div class="recipeLinkSizerContainer">
                    <div class="recipeLinkSizer square">
                        <a href='/recipe/tiramisu' target='_self' class="highlightedRecipeLink attachedToPreviousElement">
                            <article id='highlightedRecipe-3' class='highlightedRecipe'>
                               <img src='/images/Tiramisu.jpg' alt='tiramisu' />
                               <div class="titleBox"><h3>Tiramisu</h3></div>
                            </article>
                        </a>
                    </div>
                </div>
            </div>
            <div class="recipeLinkContainer col-lg-3 col-md-4 col-sm-6">
                <div class="recipeLinkSizerContainer">
                    <div class="recipeLinkSizer square">
                        <a href="{{route('recipe', ['title' => 'cheesecake'])}}" target='_self' class="highlightedRecipeLink attachedToPreviousElement">
                            <article id='highlightedRecipe-4' class='highlightedRecipe'>
                                <img src='/images/Cheesecake.jpg' alt='cheesecake' />
                                <div class="titleBox"><h3>Cheesecake</h3></div>
                            </article>
                        </a>
                    </div>
                </div>
            </div>
            <div class="recipeLinkContainer col-lg-3 col-md-4 col-sm-6">
                <div class="recipeLinkSizerContainer">
                    <div class="recipeLinkSizer square">
                        <a href='/recipe/gateau-suedois-au-chocolat' target='_self' class="highlightedRecipeLink attachedToPreviousElement">
                            <article id='highlightedRecipe-5' class='highlightedRecipe'>
                                <img src='/images/G%C3%A2teau%20su%C3%A9dois%20au%20chocolat.jpg' alt='gâteau suédois au chocolat' />
                                <div class="titleBox"><h3>Gâteau suédois au chocolat</h3></div>
                            </article>
                        </a>
                    </div>
                </div>
            </div>
            <div class="recipeLinkContainer col-lg-3 col-md-4 col-sm-6">
                <div class="recipeLinkSizerContainer">
                    <div class="recipeLinkSizer square">
                        <a href='/recipe/tiramisu' target='_self' class="highlightedRecipeLink attachedToPreviousElement">
                            <article id='highlightedRecipe-6' class='highlightedRecipe'>
                               <img src='/images/Tiramisu.jpg' alt='tiramisu' />
                               <div class="titleBox"><h3>Tiramisu</h3></div>
                            </article>
                        </a>
                    </div>
                </div>
            </div>
            <div class="recipeLinkContainer col-lg-3 col-md-4 col-sm-6">
                <div class="recipeLinkSizerContainer">
                    <div class="recipeLinkSizer square">
                        <a href="{{route('recipe', ['title' => 'cheesecake'])}}" target='_self' class="highlightedRecipeLink attachedToPreviousElement">
                            <article id='highlightedRecipe-7' class='highlightedRecipe'>
                                <img src='/images/Cheesecake.jpg' alt='cheesecake' />
                                <div class="titleBox"><h3>Cheesecake</h3></div>
                            </article>
                        </a>
                    </div>
                </div>
            </div>
            <div class="recipeLinkContainer col-lg-3 col-md-4 col-sm-6">
                <div class="recipeLinkSizerContainer">
                    <div class="recipeLinkSizer square">
                        <a href='/recipe/gateau-suedois-au-chocolat' target='_self' class="highlightedRecipeLink attachedToPreviousElement">
                            <article id='highlightedRecipe-8' class='highlightedRecipe'>
                                <img src='/images/G%C3%A2teau%20su%C3%A9dois%20au%20chocolat.jpg' alt='gâteau suédois au chocolat' />
                                <div class="titleBox"><h3>Gâteau suédois au chocolat</h3></div>
                            </article>
                        </a>
                    </div>
                </div>
            </div>
            <div class="recipeLinkContainer col-lg-3 col-md-4 col-sm-6">
                <div class="recipeLinkSizerContainer">
                    <div class="recipeLinkSizer square">
                        <a href='/recipe/tiramisu' target='_self' class="highlightedRecipeLink attachedToPreviousElement">
                            <article id='highlightedRecipe-9' class='highlightedRecipe'>
                               <img src='/images/Tiramisu.jpg' alt='tiramisu' />
                               <div class="titleBox"><h3>Tiramisu</h3></div>
                            </article>
                        </a>
                    </div>
                </div>
            </div>
            <div class="recipeLinkContainer col-lg-3 col-md-4 col-sm-6">
                <div class="recipeLinkSizerContainer">
                    <div class="recipeLinkSizer square">
                        <a href="{{route('recipe', ['title' => 'cheesecake'])}}" target='_self' class="highlightedRecipeLink attachedToPreviousElement">
                            <article id='highlightedRecipe-10' class='highlightedRecipe'>
                                <img src='/images/Cheesecake.jpg' alt='cheesecake' />
                                <div class="titleBox"><h3>Cheesecake</h3></div>
                            </article>
                        </a>
                    </div>
                </div>
            </div>
            <div class="recipeLinkContainer col-lg-3 col-md-4 col-sm-6">
                <div class="recipeLinkSizerContainer">
                    <div class="recipeLinkSizer square">
                        <a href='/recipe/gateau-suedois-au-chocolat' target='_self' class="highlightedRecipeLink attachedToPreviousElement">
                            <article id='highlightedRecipe-11' class='highlightedRecipe'>
                                <img src='/images/G%C3%A2teau%20su%C3%A9dois%20au%20chocolat.jpg' alt='gâteau suédois au chocolat' />
                                <div class="titleBox"><h3>Gâteau suédois au chocolat</h3></div>
                            </article>
                        </a>
                    </div>
                </div>
            </div>
            <div class="recipeLinkContainer col-lg-3 col-md-4 col-sm-6">
                <div class="recipeLinkSizerContainer">
                    <div class="recipeLinkSizer square">
                        <a href='/recipe/tiramisu' target='_self' class="highlightedRecipeLink attachedToPreviousElement">
                            <article id='highlightedRecipe-12' class='highlightedRecipe'>
                               <img src='/images/Tiramisu.jpg' alt='tiramisu' />
                               <div class="titleBox"><h3>Tiramisu</h3></div>
                            </article>
                        </a>
                    </div>
                </div>
            </div>

        </div>
   </section>
   <footer>
       
   </footer>

@endsection
