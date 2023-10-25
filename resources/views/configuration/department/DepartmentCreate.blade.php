@extends('TemplateAdmin');
@section('content')
    <div class="container-fluid">
        <div class="row center py-5">
            <div class="col-5 ">
                <form id="frm_departamentos" action="../../services/departamento/create.php" name="frm_departamentos"
                    method="POST">
                    <div class="mb-3">
                        <label for="departamento" class="form-label">Departamtento</label>
                        <input type="text" class="form-control" id="departamento" name="departamento"
                            aria-describedby="emailHelp" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Agregar</button>
                </form>
                <div class="my-4">
                    <?php
                    //if(isset($_GET['mensaje']) and $_GET['mensaje']=='registrado'){
                    ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Registrado</strong> se agrego con exito..
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php
                    //}
                    ?>

                    <?php
                    //if(isset($_GET['mensaje']) and $_GET['mensaje']=='Error'){
                    ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error</strong> vuelve a intentarlo..
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php
                    //}
                    ?>
                </div>
            </div>
        </div>
    </div>
@endsection
