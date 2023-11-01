@extends('TemplateAdmin');
@section('content')
    <div class="container-fluid">
        <div class="row center py-2">
            <div class="col-md-7">
                <div class="my-4">
                    <?php
            if(isset($_GET['mensaje']) and $_GET['mensaje']=='Eliminado'){
        ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Eliminado</strong> departamento con exito..
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
                <div class="card" style="width: 50rem;">
                    <div style="display: flex; justify-content: Right;">

                        <a href="{{ route('department.create') }}" class="btn btn-primary" role="button"
                            data-bs-toggle="button">añadir
                            <i class="bi bi-plus-circle"></i></a>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            lista de Departamentos
                        </div>
                        <div class="p-4">
                            <table class="table align-middle">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col" colspan="2">Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @isset($departamento)
                                        <?php $cont = 1; ?>
                                        @foreach ($departamento as $depart)
                                            <tr>
                                                <td>{{ $cont }}</td>
                                                <td>{{ $depart->nombre }}</td>
                                                <td>
                                                    <a class='text-success' href="{{ route('department.edit', $depart) }}">
                                                        <i class='bi bi-pencil-square'></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php $cont++; ?>
                                        @endforeach
                                    @endisset
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        @endsection
