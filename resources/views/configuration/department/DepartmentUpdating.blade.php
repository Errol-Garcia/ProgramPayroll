@extends('TemplateAdmin');
@section('content')
    <div class="container-fluid">
        <div class="row centrar py-5">
            <div class="col-5 " style="padding-bottom:500px;">
                <?php
                /*$s = $db->prepare('SELECT * FROM departamento WHERE id=:idd');
                $s->bindValue(':idd', $id, PDO::PARAM_INT);
                $s->execute();
                $departamento = $s->fetchAll();*/
                ?>
                <form id="frm_departamentos" action="../../services/departamento/update.php" name="frm_departamentos"
                    method="POST">
                    <div class="mb-3">
                        <label for="departamento" class="form-label">Departamtento</label>
                        <input type="text" class="form-control" id="departamento" name="departamento"
                            value="<?php //echo $departamento[0]['nombre'];
                            ?>" aria-describedby="emailHelp" required>
                        <input type="hidden" name="id" value="<?php //echo $departamento[0]['id'];
                        ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
