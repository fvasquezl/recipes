@extends('layouts.app')

@section('content')
    <div class="container" xmlns="http://www.w3.org/1999/html">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create Recipes</div>
                    <div class="panel-body">
                        {!! Form::open(['route'=>'recipes.store','method' =>'POST']) !!}
                            {!! Field::text('name',null, ['class'=>'form-control'])!!}
                            {!! Form::submit('Create Recipe!',['class'=>'btn btn-primary'] )!!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection