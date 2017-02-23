
{!! link_to_route('recipes.edit','Edit',$recipe,['class'=>'btn btn-success']) !!}
{!! link_to_route('recipes.show','Show',$recipe,['class'=>'btn btn-info']) !!}

{!! Form::open(['route' =>['recipes.destroy',$recipe],'method'=>'DELETE']) !!}
    {!! Form::submit('Delete',['class'=>'btn btn-warning']) !!}
{!! Form::close() !!}
