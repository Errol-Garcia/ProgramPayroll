@extends('TemplateAdmin');
@section('content')
    <div class="container-fluid">
        <div class="row center py-5">
            <div class="col-3 ">
                <?php
                /*$id=$_GET['sueldo'];
                $s=$db->prepare('SELECT s.id,s."diasT", s.horasextras, s.vhora, s.bono, e.salario from sueldo as s
                                    inner join empleado AS e ON e.id = s.idempleado where s.id=:idd');
                $s->bindValue(':idd',$id, PDO::PARAM_INT);
                $s->execute();
                $sueldo=$s->fetchAll();*/
                ?>
                <form action="../../services/sueldo/update.php" method="POST">
                    <div class="mb-3">
                        <label for="diasT" class="form-label">N° Dias Trabajados</label>
                        <input type="text" class="form-control" name="diasT" value="<?php /*echo $sueldo[0]['diasT']
                        */?>"
                            aria-describedby="emailHelp" required>

                        <label for="horasExtra" class="form-label">N° Horas extras</label>
                        <input type="text" class="form-control" name="horasExtra" value="<?php //echo $sueldo[0]['horasextras']
                        ?>"
                            aria-describedby="emailHelp" required>

                        <label for="vhora" class="form-label">Valor hora mes</label>
                        <input type="text" class="form-control" name="vhora" value="<?php //echo $sueldo[0]['vhora']
                        ?>"
                            aria-describedby="emailHelp" required>

                        <label for="bono" class="form-label">Valor Bono</label>
                        <input type="text" class="form-control" name="bono" value="<?php //echo $sueldo[0]['bono']
                        ?>"
                            aria-describedby="emailHelp" required>
                        <input type="hidden" name="id" value="<?php //echo $sueldo[0]['id']
                        ?>">
                        <input type="hidden" name="sueldo" value="<?php //echo $sueldo[0]['salario']
                        ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
