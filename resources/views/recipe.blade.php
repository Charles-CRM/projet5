@extends('layout')

@section('mainContent')
<div class="container">
    <h2 id='recipeTitle'>{{$recipe->title}}</h2>
  
    <section id='carouselSection'>
        <div class="row">
            <div class="col-sm-12">

                <div id="carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        @foreach ($recipe->photos as $photo)
                        @if ($loop->first)
                        <li data-target="#carousel" data-slide-to="{{$loop->index}}" class="active"></li>
                        @endif
                        <li data-target="#carousel" data-slide-to="{{$loop->index}}"></li>
                        @endforeach
                    </ol>
                    <div class="carousel-inner">
                        @foreach ($recipe->photos as $photo)
                        @if ($loop->first)
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{$photo->file_path}}" alt="Photo de {{$recipe->title}} {{$loop->iteration}}">
                        </div>
                        @endif
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{$photo->file_path}}" alt="Photo de {{$recipe->title}} {{$loop->iteration}}">
                        </div>
                        @endforeach
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
        <span>Auteur : {{$recipe->author->name}}<br /></span>
        <span>Mise à jour le {{$recipe->updated_at}}<br /></span>
        <span>Catégorie : {{$recipe->category->name}}<br /></span>
        <span>Recette prévue pour {{$recipe->portions_nbr}} portions.<br /></span>
        @if ($recipe->preparation_time)
        <span>Préparation : {{$recipe->preparation_time}}<br /></span>
        @endif
        @if ($recipe->rest_time)
        <span>Repos : {{$recipe->rest_time}}<br /></span>
        @endif
        @if ($recipe->cooking_time)
        <span>Cuisson : {{$recipe->cooking_time}}<br /></span>
        @endif
        <span>Saveurs associées :<br /></span>
        <ul>
            @foreach ($recipe->flavours as $flavour)
                <li>{{$flavour->name}}</li>
            @endforeach
        </ul>
        <span>Mots-clefs associés :<br /></span>
        <ul>
            @foreach ($recipe->tags as $tag)
                <li>{{$tag->name}}</li>
            @endforeach
        </ul>
        <span>
            Note : {{$recipe->rating}}/5 
            @for ($i = 1; $i <= 5; $i++)
            @if ($i <= $recipe->rating)
            <i class="fas fa-star"></i>
            @else
            <i class="far fa-star"></i>
            @endif
            @endfor
             {{$recipe->votes_nbr}} avis
        </span>
        <span>
            Difficulté : {{$recipe->difficulty}}/5 
            @for ($i = 1; $i <= 5; $i++)
            @if ($i <= $recipe->difficulty)
            <i class="fas fa-circle"></i>
            @else
            <i class="far fa-circle"></i>
            @endif
            @endfor
        </span>
                        
   </section>
   <section id='instructionsSection'>

            <div class="row no-gutters">
                <div class="col-sm-3 d-none d-sm-block ingredientsArea">
                    <div class="row no-gutters">
                        @foreach ($recipe->preparations as $preparation)
                        <div class="col-12 col-ingredients">
                            <h6>{{$preparation->name}}</h6>
                            <ul>
                                @foreach ($preparation->ingredients as $ingredient)
                                <li>{{$ingredient->name}}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endforeach
                    </div>
                </div>
                
                <div class="col-sm-9 col-12 instructionsArea">
                    <div class="row no-gutters">
                        @foreach ($recipe->preparations as $preparation)
                        <div class="col-12 row no-gutters instructionsBlock">
                            <div class="col-sm-1 instructionsBlockNumber"><span>{{$loop->iteration}}</span></div>
                            <div class="col-sm-12 d-block d-sm-none col-ingredients">
                                <ul>
                                    @foreach ($preparation->ingredients as $ingredient)
                                    <li>{{$ingredient->name}}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-sm-11 col-instructions">
                                <h5>{{$preparation->name}}</h5>
                                <ol class="instructions">
                                    {!!$preparation->instructions!!}
                                </ol>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
   
    </section>
    <section id="commentsSection">
        <h3>Commentaires</h3>
        <div class="row no-gutters">
            @foreach ($recipe->comments as $comment)
            <div class="col-12 comment-block">
                <div class="comment-block-content">
                    <span class="comment-infos"><span class="comment-author">{{$comment->author->name}}</span><span class="comment-date">le {{$comment->created_at}}</span><span class="comment-votes"><span class="comment-votes-up">{{$comment->votes_up}} <i class="far fa-thumbs-up"></i></span><span class="comment-votes-down"><i class="far fa-thumbs-down"></i> {{$comment->votes_down}}</span></span></span>
                    <span class="comment">{{$comment->message}}</span>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</div>

@endsection