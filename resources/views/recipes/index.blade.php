@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Recipes</div>
                    <div class="panel-body">
                        {!! Alert::render() !!}
                        {!! link_to(route('recipes.create'), "Create Recipe", ['class'=>'btn btn-primary'])!!}
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($recipes as $recipe)
                                <tr>
                                    <td>{{$recipe->name}}</td>
                                    <td>
                                      @include('recipes.partials.buttons')
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection