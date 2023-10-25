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
                <div class="card" style="width: 50rem; margin-left: 200px">
                    <div class="card-header">
                        lista Nomina
                    </div>
                    <div class="p-4">
                        <table class="table align-middle">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Cedula</th>
                                    <th scope="col">Nombres</th>
                                    <th scope="col">Apellidos</th>
                                    <th scope="col">Telefono</th>
                                    <th scope="col">Sueldo Neto</th>
                                    <th scope="col">Opcion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                /*
                        $n=1;
                            $s=$db->prepare('SELECT e.id,e.cedula, e.nombres, e.apellidos, e.telefono, n.id, n."sueldoNeto"
                                            from "nominaEmpleado" AS n inner join empleado AS e ON n.id_empleado=e.id');
                            $s->execute();
                            $result=$s->fetchAll();
                            foreach($result as $neto){  
                                echo "<tr><td scope='row'>".$n."</td>".
                                "<td>".$neto[1]."</td>".
                                "<td>".$neto[2]."</td>".
                                "<td>".$neto[3]."</td>".
                                "<td>".$neto[4]."</td>".
                                "<td>".$neto[6]."</td>".
                                "<td><a class='text-success' href='../sueldo/update.php?sueldo=".$neto[0]."'>
                                <i class='bi bi-journal-arrow-up'></i></i></i> </a></td></tr>";
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
