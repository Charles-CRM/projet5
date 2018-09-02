@extends('default')

@section('mainContent')
<div class="container">
    <h2 id='recipeTitle'>Petits gâteaux sablés à l'amande</h2>
  
    <section id='carouselSection'>
        <div class="row">
            <div class="col-sm-12">

                <div id="carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel" data-slide-to="1"></li>
                        <li data-target="#carousel" data-slide-to="2"></li>
                        <li data-target="#carousel" data-slide-to="3"></li>
                        <li data-target="#carousel" data-slide-to="4"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="/images/sablés-aux-amandes-1.jpg" alt="sablés aux amandes 1">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/images/sablés-aux-amandes-2.jpg" alt="sablés aux amandes 2">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/images/sablés-aux-amandes-3.jpg" alt="sablés aux amandes 3">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/images/sablés-aux-amandes-4.jpg" alt="sablés aux amandes 4">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/images/sablés-aux-amandes-5.jpg" alt="sablés aux amandes 5">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>
        </div>
    </section>

   
   <section id='recipeInfosSection'>
       <span>4/5 : <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></span>
                        
   </section>
   <section id='instructionsSection'>


            <div class="row no-gutters">
                <div class="col-sm-3 d-none d-sm-block ingredientsArea">
                    <div class="row no-gutters">
                        <div class="col-12 col-ingredients">
                            <h6>Préparation 1</h6>
                            <ul>
                                <li>ingrédient 1</li>
                                <li>ingrédient 2</li>
                                <li>ingrédient 3</li>
                                <li>ingrédient 4</li>
                            </ul>
                        </div>
                        <div class="col-12 col-ingredients">
                            <h6>Préparation 2</h6>
                            <ul>
                                <li>ingrédient 1</li>
                                <li>ingrédient 2</li>
                                <li>ingrédient 3</li>
                                <li>ingrédient 4</li>
                            </ul>
                        </div>
                        <div class="col-12 col-ingredients">
                            <h6>Préparation 3</h6>
                            <ul>
                                <li>ingrédient 1</li>
                                <li>ingrédient 2</li>
                                <li>ingrédient 3</li>
                                <li>ingrédient 4</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-9 col-12 instructionsArea">
                    <div class="row no-gutters">
                        <div class="col-12 row no-gutters instructionsBlock">
                            <div class="col-sm-1 instructionsBlockNumber"><span>1</span></div>
                            <div class="col-sm-12 d-block d-sm-none col-ingredients">
                                <h6>Préparation 1</h6>
                                <ul>
                                    <li>ingrédient 1</li>
                                    <li>ingrédient 2</li>
                                    <li>ingrédient 3</li>
                                    <li>ingrédient 4</li>
                                </ul>
                            </div>
                            <div class="col-sm-11 col-instructions">
                                <h5>Faire la préparation 1</h5>
                                <ul class="instructions">
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu libero venenatis enim lacinia condimentum.</li>
                                    <li>Maecenas tristique metus nisl. Quisque at justo vel dolor eleifend pretium et vel orci. </li>
                                    <li>Mauris sed mi congue, iaculis leo nec, mollis urna.</li>
                                    <li>Mauris semper consectetur volutpat. Donec et porta augue. Praesent pulvinar arcu ac elit facilisis condimentum.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 row no-gutters instructionsBlock">
                            <div class="col-sm-1 instructionsBlockNumber"><span>2</span></div>
                            <div class="col-sm-12 d-block d-sm-none col-ingredients">
                                <h6>Préparation 2</h6>
                                <ul>
                                    <li>ingrédient 1</li>
                                    <li>ingrédient 2</li>
                                    <li>ingrédient 3</li>
                                    <li>ingrédient 4</li>
                                </ul>
                            </div>
                            <div class="col-sm-11 col-instructions">
                                <h5>Faire la préparation 2</h5>
                                <ul class="instructions">
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu libero venenatis enim lacinia condimentum.</li>
                                    <li>Maecenas tristique metus nisl. Quisque at justo vel dolor eleifend pretium et vel orci. </li>
                                    <li>Mauris sed mi congue, iaculis leo nec, mollis urna.</li>
                                    <li>Mauris semper consectetur volutpat. Donec et porta augue. Praesent pulvinar arcu ac elit facilisis condimentum.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 row no-gutters instructionsBlock">
                            <div class="col-sm-1 instructionsBlockNumber"><span>3</span></div>
                            <div class="col-sm-12 d-block d-sm-none col-ingredients">
                                <h6>Préparation 3</h6>
                                <ul>
                                    <li>ingrédient 1</li>
                                    <li>ingrédient 2</li>
                                    <li>ingrédient 3</li>
                                    <li>ingrédient 4</li>
                                </ul>
                            </div>
                            <div class="col-sm-11 col-instructions">
                                <h5>Faire la préparation 3</h5>
                                <ul class="instructions">
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu libero venenatis enim lacinia condimentum.</li>
                                    <li>Maecenas tristique metus nisl. Quisque at justo vel dolor eleifend pretium et vel orci. </li>
                                    <li>Mauris sed mi congue, iaculis leo nec, mollis urna.</li>
                                    <li>Mauris semper consectetur volutpat. Donec et porta augue. Praesent pulvinar arcu ac elit facilisis condimentum.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
   
   </section>
</div>

@endsection