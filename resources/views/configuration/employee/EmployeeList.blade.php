@extends('TemplateAdmin');
@section('content')
    <div class="container-fluid">
        <div class="row center py-2">
            <div class="col-md-10">
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
                <div class="card" style="width: 70rem; margin-left: 220px">
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
                                    <?php //echo $th;
                                    ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                /*
                                $n=1;  
                                $s->execute();
                                $result = $s->fetchAll();
                                foreach($result as $empleo){
                                    echo "<tr><td scope='row'>".$n."</td>".
                                    "<td>".$empleo[1]."</td>".
                                    "<td>".$empleo[2]."</td>".
                                    "<td>".$empleo[3]."</td>".
                                    "<td>".$empleo[4]."</td>".
                                    "<td>".$empleo[5]."</td>".
                                    "<td>".$empleo[6]."</td>".
                                    "<td>".$empleo[7]."</td>".
                                    "<td>".$empleo[8]."</td>".
                                    "<td><a class='text-success' style='margin-left: 13px' href='./update.php?empleadoId=".$empleo[0]."'><i class='bi bi-pencil-square'></i>".
                                    "<a class='text-danger' href='../../services/empleado/delete.php?empleadoId=".$empleo[0]."'><i class='bi bi-trash'></i>" .                                    
                                    "</a></td>".opciones($empleo[0],$rol);
                                    $n++;
                                }*/
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection
