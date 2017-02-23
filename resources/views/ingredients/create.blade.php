@extends('layouts.app')

@section('content')
    <div class="container" xmlns="http://www.w3.org/1999/html">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create Ingredient</div>
                    <div class="panel-body">

                       {!! Form::model($recipe,['route'=>['recipes.ingredients.store',$recipe],'method'=>'POST']) !!}
                        {!! Field::text('name','')!!}
                        {!! Form::submit('Create Ingredient!',['class'=>'btn btn-primary'] )!!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection