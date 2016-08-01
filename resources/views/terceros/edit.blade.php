@extends('app')

@section('content')

    <h1> Editar Tercero: {{$terceros->id}}</h1>

    {!! Form::model($terceros,['method'=>'PATCH','action'=>['TerceroController@update',$terceros->id]]) !!}



    @include('terceros.paretials.form')

    <br>
    <div class="form-group col-xs-12">
        {!! Form::button('Guardar',['type'=>'submit','class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}


@endsection