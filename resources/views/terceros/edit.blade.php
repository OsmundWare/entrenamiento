@extends('app')

@section('content')

    <h1> Editar Tercero: {{$terceros->id}}</h1>

    {!! Form::model($terceros,['method'=>'PATCH','action'=>['TerceroController@update',$terceros->id]]) !!}



    @include('terceros.paretials.form')


    <div class="form-group col-xs-12">
        {!! Form::button('Guardar',['type'=>'submit','class'=>'btn btn-primary']) !!}
    </div>

    <div class="form-group col-xs-12">
    {!! Form::close() !!}

    {!! Form::open(['method'=>'DELETE','route'=>['terceros.destroy',$terceros->id]]) !!}
    {!! Form::button('Eliminar',['type'=>'submit','class'=>'btn btn-danger']) !!}
    {!! Form::close() !!}
    </div>

@endsection