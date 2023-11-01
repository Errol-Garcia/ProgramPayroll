@extends('TemplateAdmin');
@section('content')
    <div class="container">
        <div class="row py-2">
            <div class="col-3">
                <form action="{{ route('nomina') }}" method="POST" id="frmaddN">
                    <div class="card" style="width: 17rem;">
                        <div class="card-header">
                            Consulta Empleado
                        </div>
                        <div class="card-body card-flex">
                            <input type="text" name="cedula" placeholder="Cedula" class="form-control"
                                aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            <button type="submit" class="btn btn-primary btn-buscar" id="btn-buscar">Buscar</button>
                        </div>
                    </div>
                </form>
                <div class="my-4">
                    <?php
                if(isset($_GET['mensaje']) and $_GET['mensaje']=='registrado'){
            ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Registrado</strong> se agrego con exito..
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php
                }
            ?>

                    <?php
                if(isset($_GET['mensaje']) and $_GET['mensaje']=='Error'){
            ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error</strong> vuelve a intentarlo..
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php
                }
            ?>
                </div>
            </div>
            <div class="col-9">
                @isset($_POST['cedula'])
                    @isset($empleado != null)
                        {

                        @isset($sueldo != null)
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Empleado</strong> ya tiene registrada la pre nomina..
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @else
                            <form action="../../services/nomina/create.php" method="POST">
                                <div class="card" style="width: 50rem;">
                                    <div class="card-header">Empleados</div>
                                    <div class="p-4">
                                        <table class="table align-middle">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Nombres</th>
                                                    <th scope="col">Apellidos</th>
                                                    <th scope="col">Telefono</th>
                                                    <th scope="col">sueldo</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>' .
                                                        $empleado[0][1] .
                                                        '</td>
                                                    <td>' .
                                                        $empleado[0][2] .
                                                        '</td>
                                                    <td>' .
                                                        $empleado[0][3] .
                                                        '</td>
                                                    <td>$ ' .
                                                        $empleado[0][5] .
                                                        '</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div><br>
                                <div class="card" style="width: 50rem;">
                                    <div class="card-header">Informacion correspondiente el mes laborado</div>
                                    <div class="card-body">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td><input type="text" name="diasT" placeholder="Dias Trabajados"
                                                            class="form-control" aria-label="Sizing example input"
                                                            aria-describedby="inputGroup-sizing-default"></td>
                                                    <td><input type="text" name="horasExtra" placeholder="N° horas extras"
                                                            class="form-control" aria-label="Sizing example input"
                                                            aria-describedby="inputGroup-sizing-default"></td>
                                                    <td><input type="text" name="vhora" placeholder="Valor hora mes"
                                                            class="form-control" aria-label="Sizing example input"
                                                            aria-describedby="inputGroup-sizing-default"></td>
                                                    <td><input type="text" name="bono" placeholder="Valor bono mes"
                                                            class="form-control" aria-label="Sizing example input"
                                                            aria-describedby="inputGroup-sizing-default"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="center">
                                    <input type="hidden" name="id"
                                        value=' .
                                $empleado[0][0] .
                                '>
                                    <input type="hidden" name="sueldo"
                                        value=' .
                                $empleado[0][5] .
                                '>
                                    <button type="submit" class="btn btn-primary btn-dsdv">Registrar</button>
                                </div>
                            </form>
                        @endisset
                    @else
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Empleado</strong> Empleado no existe..
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endisset
                @endisset
            </div>
        </div>
    </div>
@endsection
