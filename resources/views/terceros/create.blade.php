@extends('app')

@section('content')

    <h1> Registrar Tercero</h1>

    {!! Form::open(['route'=>'terceros.store']) !!}



    @include('terceros.paretials.form')

    <br>
    <div class="form-group col-xs-12">
            {!! Form::button('Guardar',['type'=>'submit','class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}


@endsection