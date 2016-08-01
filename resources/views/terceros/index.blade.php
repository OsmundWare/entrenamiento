@extends('app')

@section('content')

    <h1> Terceros registrados</h1>

    <table class="table table-bordered table-striped table-responsive">

            <thead>
                    <tr>
                        <th>#</th>
                        <th>Nit</th>
                        <th>Nombre</th>
                        <th>Rol</th>
                        <th>Direccion</th>
                        <th>Telefono</th>
                        <th>Email</th>
                        <th>Notas</th>
                        <th>Aciones</th>
                    </tr>

            </thead>
        @foreach($terceros as $tercero)


            <tbody>

                    <td> {{ $tercero->id }}</td>
                    <td> {{ $tercero->nit }}</td>
                    <td> {{ $tercero->nombre }}</td>
                    <td> {{ $tercero->rol }}</td>
                    <td> {{ $tercero->direccion }}</td>
                    <td> {{ $tercero->telefono }}</td>
                    <td> {{ $tercero->email }}</td>
                    <td> {{ $tercero->notas }}</td>
                    <td>
                        <a href="../public/terceros/{{$tercero->id}}/edit" class="btn btn-warning">Editar</a>
                        <a href="../public/terceros/{{$tercero->id}}" class="btn btn-success">Detalles</a>

                    </td>


            </tbody>
         @endforeach

    </table>



@endsection