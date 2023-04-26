@extends('adminlte::page')

@section('content_header')
    <h1 class="m-0 text-dark">Registrar Acceso</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div>
                        <form accept-charset="UTF-8" action="/accesos/store" method="post">
                            @csrf
                        <div class="row">
                            <x-adminlte-input name="nombre" label="Nombre completo" placeholder="persona que va a ingresar" fgroup-class="col-md-6" />
                        </div>

                        <div class="row">
{{--                            <x-adminlte-select name="area" label="Área" fgroup-class="col-md-6">--}}
{{--                                <option>Dirección general</option>--}}
{{--                                <option>Administración</option>--}}
{{--                                <option>Tesoreria</option>--}}
{{--                                <option>Sistemas</option>--}}
{{--                                <option>Recursos Humanos</option>--}}
{{--                                <option>Admisiones</option>--}}
{{--                                <option>Preescolar</option>--}}
{{--                                <option>Primaria</option>--}}
{{--                                <option>Secundaria</option>--}}
{{--                                <option>Bachillerato</option>--}}
{{--                                <option>API</option>--}}
{{--                            </x-adminlte-select>--}}
                            <x-adminlte-select2 name="area" fgroup-class="col-md-6" label="Área" data-placeholder="Seleccione una opcion...">
                                <?php
                                    $datos = array(
                                        'Dirección general'  => 'Dirección general',
                                        'Administración' => 'Administración',
                                        'Tesoreria' => 'Tesoreria',
                                        'Sistemas' => 'Sistemas',
                                        'Recursos Humanos'  => 'Recursos Humanos',
                                        'Admisiones' => 'Admisiones',
                                        'Preescolar' => 'Preescolar',
                                        'Primaria' => 'Primaria',
                                        'Secundaria' => 'Secundaria',
                                        'Bachillerato' => 'Bachillerato',
                                        'API' => 'API',
                                    );
                                ?>
                                <x-adminlte-options :options="$datos" empty-option/>
                            </x-adminlte-select2>

                        </div>

                        <div class="row">
                            <x-adminlte-textarea name="proposito" label="Proposito visita" rows=3 placeholder="Describa el proposito de su visita o a quien visita" fgroup-class="col-md-6">
                            </x-adminlte-textarea>
                        </div>

                        <div class="row col-md-6">
                            <x-adminlte-button class="btn-flat" type="submit" label="Guardar" theme="success" icon="fas fa-lg fa-save" />
                        </div>



                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>


@stop
