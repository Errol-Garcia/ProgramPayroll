@extends('TemplateAdmin');
@section('content')
    <div class="container-fluid">
        <div class="row center py-3">
            <div class="col-6 ">
                <div class="card" style="width: 40rem;">
                    <div class="card-header">
                        Editar Empleado
                    </div>
                    <div class="card-body ">
                        <?php
                        /*$id=$_GET['empleadoId'];
                    $s = $db->prepare("SELECT * FROM empleado WHERE id='$id'");
                    $s->execute();
                    $empleado=$s->fetchAll();*/
                        ?>

                        <form action="../../services/empleado/update.php" method="POST">
                            <table class="tdEmpleado">
                                <tr>

                                    <td><input type="text" class="form-control" id="cedula" name="cedula"
                                            value="<?php echo $empleado[0]['cedula']; ?>" aria-describedby="emailHelp" required></td>
                                    <td><input placeholder="Nombres" value="<?php //echo $empleado[0]['nombres']
                                    ?>" type="text"
                                            id="nombres" name="nombres" class="form-control"
                                            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                    </td>
                                    <td><input placeholder="Apellidos" value="<?php //echo $empleado[0]['apellidos']
                                    ?>" type="text"
                                            id="apellidos" name="apellidos" class="form-control"
                                            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                    </td>
                                </tr>
                                <tr>
                                    <td><input placeholder="Telefono" value="<?php //echo $empleado[0]['telefono']
                                    ?>" type="text"
                                            id="telefono" name="telefono" class="form-control"
                                            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                    </td>
                                    <td colspan="2"><input placeholder="Direccion" value="<?php //echo $empleado[0]['direccion']
                                    ?>"
                                            type="text" id="direccion" name="direccion" class="form-control"
                                            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3"><input placeholder="Email" value="<?php //echo $empleado[0]['email']
                                    ?>" type="text"
                                            id="email" name="email" class="form-control"
                                            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input placeholder="Salario" type="text" value="<?php //echo $empleado[0]['salario']
                                        ?>"
                                            id="salario" name="salario" class="form-control"
                                            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                        <input type="hidden" name="id" value="<?php// echo $empleado[0]['id'] ?> ?>">
                                    </td>
                                    <td>
                                        <select class="form-select" name="cargo" aria-label="Default select example">
                                            <?php
                                            /*$s=$db->prepare("SELECT nombre from cargo WHERE id=:idd");
                                    $s->bindValue(':idd',$empleado[0]['idcargo'], PDO::PARAM_INT);
                                    $s->execute();
                                    $seleCargo = $s->fetchAll();
                                    $s=$db->prepare("SELECT *FROM cargo");
                                    $s->execute();
                                    $result = $s->fetchAll();
                                    foreach($result as $cargo){ 
                                        echo "<option value='$cargo[0]'>$cargo[1]</option>";
                                    }*/
                                            ?>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-select" name="departamento" aria-label="Default select example">
                                            <?php
                                            /*$s=$db->prepare("SELECT nombre from departamento WHERE id=:idde");
                                        $s->bindValue(':idde',$empleado[0]['iddepartamento'], PDO::PARAM_INT);
                                        $s->execute();
                                        $seleDepartamento =$s->fetchAll();
                                        $s=$db->prepare("SELECT *FROM departamento");
                                        $s->execute();
                                        $result =$s->fetchAll();
                                        foreach($result as $departamento){ 
                                            echo "<option value='$departamento[0]'>$departamento[1]</option>";
                                        }*/
                                            ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="center"><button type="submit" class="btn btn-primary">Actualizar</button>
                                    </td>
                                    <td></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
