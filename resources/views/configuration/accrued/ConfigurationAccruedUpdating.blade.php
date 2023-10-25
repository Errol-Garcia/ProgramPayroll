@extends('TemplateAdmin');
@section('content')
    <div class="container-fluid">
        <div class="row center py-2">
            <div class="col-3 ">
                <?php
                /*
            $s=$db->prepare("SELECT * FROM devengado WHERE id=:idd");
            $s->bindValue(':idd',$id, PDO::PARAM_INT);
            $s->execute();
            $devengado=$s->fetchAll();*/
                ?>
                <form id="frmDescuento" action="../../services/devengado/update.php" method="POST">
                    <div class="mb-3">
                        <label for="arl" class="form-label">Alimentacion</label>
                        <input type="number" class="form-control" id="arl" name="alimentacion"
                            value="<?php //echo $devengado[0]['alimentacion'];
                            ?>" aria-describedby="emailHelp" required>

                        <label for="salud" class="form-label">Vivienda</label>
                        <input type="number" class="form-control" id="salud" name="vivienda"
                            value="<?php //echo $devengado[0]['vivienda'];
                            ?>" aria-describedby="emailHelp" required>

                        <label for="s" class="form-label">Transporte</label>
                        <input type="number" class="form-control" id="pension" name="transporte"
                            value="<?php //echo $devengado[0]['transporte'];
                            ?>" aria-describedby="emailHelp" required>

                        <label for="parafiscal" class="form-label">Horas Extras</label>
                        <input type="number" class="form-control" id="parafiscal" name="extra"
                            value="<?php //echo $devengado[0]['extra'];
                            ?>" aria-describedby="emailHelp" require>
                        <input type="hidden" name="id" value="<?php //echo $devengado[0]['id']
                        ?>">

                        <label for="fec" class="form-label">Fecha</label>
                        <input type="date" class="form-control" id="fecha" name="fecha" required
                            placeholder="YYYY-MM-DD" value="<?php //echo $devengado[0]['fecha'];
                            ?>" aria-describedby="emailHelp" require>
                    </div>
                    <button type="submit" class="btn btn-primary" id="id" value="<? $id?>">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
