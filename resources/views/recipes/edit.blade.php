@extends('layouts.app')

@section('content')
    <div class="container" xmlns="http://www.w3.org/1999/html">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Recipes</div>
                    <div class="panel-body">
                        {!! Form::Model($recipe,['route'=>['recipes.update',$recipe],'method' =>'PUT']) !!}
                        {!! Field::text('name',null, ['class'=>'form-control'])!!}
                        {!! Form::submit('Edit Recipe!',['class'=>'btn btn-primary'] )!!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection