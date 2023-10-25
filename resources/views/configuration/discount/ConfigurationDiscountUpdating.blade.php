@extends('TemplateAdmin');
@section('content')
    <div class="container-fluid">
        <div class="row center py-2">
            <div class="col-3 ">
                <?php
                /*$s=$db->prepare("SELECT * FROM descuento WHERE id=:idd");
                $s->bindValue(':idd',$id, PDO::PARAM_INT);
                $s->execute();
                $descuento = $s->fetchAll();*/
                ?>
                <form action="../../services/descuento/update.php" method="POST">
                    <div class="mb-3">
                        <label for="arl" class="form-label">ARL</label>
                        <input type="number" step="0.001" class="form-control" id="arl" name="arl"
                            value="<?php //echo $descuento[0]['arl']
                            ?>" required>

                        <label for="salud" class="form-label">Salud</label>
                        <input type="number" step="0.001" class="form-control" id="salud" name="salud"
                            value="<?php //echo $descuento[0]['salud']
                            ?>" aria-describedby="emailHelp" required>

                        <label for="s" class="form-label">Pension</label>
                        <input type="number" step="0.001" class="form-control" id="pension" name="pension"
                            value="<?php //echo $descuento[0]['pension']
                            ?>" aria-describedby="emailHelp" required>

                        <label for="parafiscal" class="form-label">Parafiscal</label>
                        <input type="number" step="0.001" class="form-control" id="parafiscal" name="parafiscal"
                            value="<?php //echo $descuento[0]['parafiscal']
                            ?>" aria-describedby="emailHelp" require>
                        <input type="hidden" name="id" value="<?php //echo $descuento[0]['id']
                        ?>">

                        <label for="parafiscal" class="form-label">Fecha</label>
                        <input type="date" class="form-control" id="Fecha" name="fecha" value="<?php //echo $descuento[0]['fecha']
                        ?>"
                            aria-describedby="emailHelp" require>
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
