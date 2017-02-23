@extends('layouts.app')

@section('content')
    <div class="container" xmlns="http://www.w3.org/1999/html">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Show Recipes</div>
                    <div class="panel-body">
                        <div>
                            Recipe : <b>{{$recipe->name}}</b>
                        </div>
                        <hr>
                        {!! link_to_route('recipes.ingredients.create','Create Ingredient!',$recipe,['class'=>'btn btn-success']) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection