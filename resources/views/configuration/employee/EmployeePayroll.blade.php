@extends('TemplateAdmin');
@section('content')
    <div class="container-fluid">
        <div class="row center py-2">
            <div class="col-md-7">
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
                <div class="card mx-auto" style="width: 50rem; display: flex; justify-content: center;">
                    <div class="card-header">
                        Lista nomina
                    </div>
                    <div class="p-4">
                        <table class="table align-middle">
                            <thead>
                                <tr>
                                    <th style="text-align: center" scope="col">#</th>
                                    <th style="text-align: center" scope="col">Cedula</th>
                                    <th style="text-align: center" scope="col">Nombres</th>
                                    <th style="text-align: center" scope="col">Apellidos</th>
                                    <th style="text-align: center" scope="col">Telefono</th>
                                    <th style="text-align: center" scope="col">Sueldo Neto</th>
                                    <th style="text-align: center" scope="col">Opcion</th>
                                </tr>
                            </thead>
                            <tbody>
                                @isset($empleado)
                                    <?php $cont = 1; ?>
                                    @foreach ($empleado as $emple)
                                        <tr>
                                            <td style="text-align: center">{{ $cont }}</td>
                                            <td style="text-align: center">{{ $emple->cedula }}</td>
                                            <td style="text-align: center">{{ $emple->nombres }}</td>
                                            <td style="text-align: center">{{ $emple->apellidos }}</td>
                                            <td style="text-align: center">{{ $emple->telefono }}</td>
                                            <td style="text-align: center">{{ $emple->nominaEmpleado->sueldoNeto }}</td>
                                            <td style="text-align: center">
                                                <a class='text-success' href="{{ route('employee.edit', $emple) }}">
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
