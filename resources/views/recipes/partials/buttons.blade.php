
{!! link_to_route('recipes.edit','Edit',$recipe,['class'=>'btn btn-success']) !!}
{!! link_to_route('recipes.show','Show',$recipe,['class'=>'btn btn-info']) !!}

<a href="{{ route('recipes.destroy',$recipe) }}"
   class ="btn btn-warning"
   onclick="event.preventDefault();
     document.getElementById('{{"form-$recipe->id"}}').submit();">
    Destroy
</a>

{!! Form::open(['route' =>['recipes.destroy',$recipe],'method'=>'DELETE','id' => "form-$recipe->id"]) !!}
{!! Form::close() !!}
