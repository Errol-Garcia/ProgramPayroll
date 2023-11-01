@extends('TemplateAdmin');
@section('content')
    <div class="container-fluid">
        <div class="row center py-2">
            <div class="col-md-12 justify-start">
                <div class="my-2">
                    <?php
                if(isset($_GET['mensaje']) and $_GET['mensaje']=='Eliminado'){
            ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Eliminado</strong> Empleado con exito..
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
                <div class="card justify-content-center">
                    <div style="display: flex; justify-content: Right;">
                        <a href="././create.php" class="btn btn-primary" role="button" data-bs-toggle="button">añadir <i
                                class="bi bi-plus-circle"></i></a>
                    </div>
                    <div class="card-header">
                        lista de Empleados
                    </div>
                    <div class="p-4">
                        <table class="table align-middle" style='justify-content: Right;'>
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Cedula</th>
                                    <th scope="col">Nombres</th>
                                    <th scope="col">Apellidos</th>
                                    <th scope="col">Telefono</th>
                                    <th scope="col">Cargo</th>
                                    <th scope="col">Departamento</th>
                                    <th scope="col">Direccion</th>
                                    <th scope="col">Email</th>
                                    <th scope="col" colspan="2">Opciones</th>
                                    <?php //echo $th;
                                    ?>
                                </tr>
                            </thead>
                            <tbody>
                                @isset($empleado)
                                    <?php $cont = 1; ?>
                                    @foreach ($empleado as $emple)
                                        <tr>
                                            <td>{{ $cont }}</td>
                                            <td>{{ $emple->cedula }}</td>
                                            <td>{{ $emple->nombres }}</td>
                                            <td>{{ $emple->apellidos }}</td>
                                            <td>{{ $emple->telefono }}</td>
                                            <td>{{ $emple->cargo_id }}</td>
                                            <td>{{ $emple->departamento_id }}</td>
                                            <td>{{ $emple->direccion }}</td>
                                            <td>{{ $emple->email }}</td>
                                            <td>
                                                <a class='text-success' href="{{ route('employee.edit', $emple) }}">
                                                    <i class='bi bi-pencil-square'></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php $cont++; ?>
                                    @endforeach
                                @endisset
                                {{-- "".opciones($empleo[0],$rol);
                                    $n++;
                                }*/
                                ?> --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection
