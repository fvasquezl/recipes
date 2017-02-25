@extends('layouts.app')

@section('content')
    <div class="container" xmlns="http://www.w3.org/1999/html">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Show Recipes</div>
                    <div class="panel-body">
                        {!! Alert::render() !!}
                        <h2>Recipe</h2>
                        <h3>{{ ucfirst(trans($recipe->name))}}</h3>
                        <hr>
                        <h3>Ingredients:</h3>
                        <div class="row">
                            @foreach($ingredients as $ingredient )
                                <div class="col-md-8">{{ucfirst(trans($ingredient->name))}}</div>
                                <div class="col-md-4">

                                    <a href="#"
                                       onclick="event.preventDefault();
                                               document.getElementById('{{"form-$ingredient->id"}}').submit();">
                                        Destroy
                                    </a>
                                    {!! Form::open(['route' =>['recipes.ingredients.destroy',$recipe,$ingredient],'method'=>'DELETE','id' => "form-$ingredient->id"]) !!}
                                    {!! Form::close() !!}
                                </div>
                            @endforeach
                        </div>
                        <hr>
                        {!! link_to_route('recipes.ingredients.create','Create Ingredient!',$recipe,['class'=>'btn btn-success']) !!}
                        {!! link_to('recipes','Return Index',['class'=>'btn btn-warning']) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection




