@extends('TemplateAdmin');
@section('content')
    <div class="container-fluid">
        <div class="row center py-2">
            <div class="col-md-11">
                <div class="my-4">
                    <?php
            if(isset($_GET['mensaje']) and $_GET['mensaje']=='Eliminado'){
        ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Eliminado</strong> devengado con exito..
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php
            }
        ?>

                    <?php
            if(isset($_GET['mensaje']) and $_GET['mensaje']=='Error'){
        ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Error</strong> vuelve a intentarlo..
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php
            }
        ?>

                    <?php
            if(isset($_GET['mensaje']) and $_GET['mensaje']=='Actualizado'){
        ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Actualizacion</strong> se hizo con exito..
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php
            }
        ?>
                </div>
                <div class="card" style="width: 60rem; margin-left: 200px">
                    <div style="display: flex; justify-content: Right;">

                        <a href="{{ route('accruedCreate') }}" class="btn btn-primary" role="button"
                            data-bs-toggle="button">añadir <i class="bi bi-plus-circle"></i></a>
                    </div>
                    <div class="card-header">
                        Devengado
                    </div>
                    <div class="p-4">
                        <table class="table align-middle">
                            <thead>
                                <tr>
                                    <th scope="col">Alimentacion %</th>
                                    <th scope="col">Aux Vivienda %</th>
                                    <th scope="col">Aux Transporte %</th>
                                    <th scope="col">Bonificacion %</th>
                                    <th scope="col">Fecha</th>
                                    <th scope="col" colspan="2">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @isset($devengado)
                                    @foreach ($devengado as $deven)
                                        <tr>
                                            <td>{{ $deven->alimentacion }}</td>
                                            <td>{{ $deven->vivienda }}</td>
                                            <td>{{ $deven->transporte }}</td>
                                            <td>{{ $deven->extra }}</td>
                                            <td>{{ $deven->fechaRegistro }}
                                            <td>
                                                <a class='text-success' href="{{ route('accrued.edit', $deven) }}">
                                                    <i class='bi bi-pencil-square'></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endisset
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection
