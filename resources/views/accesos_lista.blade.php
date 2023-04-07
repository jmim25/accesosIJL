@extends('adminlte::page')

@section('content_header')
    <h1 class="m-0 text-dark">Accesos Registrados</h1>
@stop

@section('content')
    <x-adminlte-card title="Lista de Eventos">
        <div class="card-body">
            <x-adminlte-datatable id="table1" :heads="$heads" striped head-theme="dark" with-buttons>
                @foreach($accesos as $acceso)
                    <tr>
                        <td>{{ $acceso->id }}</td>
                        <td>{{ $acceso->nombre }}</td>
                        <td>{{ $acceso->area }}</td>
                        <td>{{ $acceso->descripcion }}</td>
                    </tr>
                @endforeach
            </x-adminlte-datatable>
        </div>
    </x-adminlte-card>
@stop
