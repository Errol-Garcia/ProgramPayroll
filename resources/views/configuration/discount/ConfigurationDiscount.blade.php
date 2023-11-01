@extends('TemplateAdmin');
@section('content')
    <div class="container-fluid">
        <div class="row center py-2">
            <div class="col-md-9">
                <div class="my-4">
                    <?php
            if(isset($_GET['mensaje']) and $_GET['mensaje']=='Creado'){
        ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Creado</strong> Descuento con exito..
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php
            }
        ?>
                    <?php
            if(isset($_GET['mensaje']) and $_GET['mensaje']=='Eliminado'){
        ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Eliminado</strong> Descuento con exito..
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
                <div class="card" style="width: 50rem; margin-left: 200px">
                    <div style="display: flex; justify-content: Right;">
                        <a href="{{ route('discount.create') }}" class="btn btn-primary" role="button"
                            data-bs-toggle="button">añadir
                            <i class="bi bi-plus-circle"></i>
                        </a>
                    </div>
                    <div class="card-header">
                        Descuento
                    </div>

                    <div class="p-4">
                        <table class="table align-middle">
                            <thead>
                                <tr>
                                    <th scope="col">Arl %</th>
                                    <th scope="col">Salud %</th>
                                    <th scope="col">Pension %</th>
                                    <th scope="col">Parafiscales %</th>
                                    <th scope="col">Fecha</th>
                                    <th scope="col" colspan="2">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @isset($descuento)
                                    @foreach ($descuento as $descu)
                                        <tr>
                                            <td>{{ $descu->arl }}</td>
                                            <td>{{ $descu->salud }}</td>
                                            <td>{{ $descu->pension }}</td>
                                            <td>{{ $descu->parafiscal }}</td>
                                            <td>{{ $descu->fechaRegistro }}
                                            <td>
                                                <a class='text-success' href="{{ route('discount.edit', $descu) }}">
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
