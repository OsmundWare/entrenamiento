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


            </tbody>
         @endforeach

    </table>



@endsection