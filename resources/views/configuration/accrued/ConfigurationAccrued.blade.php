@extends('TemplateAdmin');
@section('content')
    <div class="container-fluid">
        <div class="row center py-2">
            <div class="col-md-9">
                <div class="my-4">
                    <?php
            if(isset($_GET['mensaje']) and $_GET['mensaje']=='Eliminado'){
        ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Eliminado</strong> departamento con exito..
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
                <div class="card" style="width: 60rem; margin-left: 200px">
                    <div class="card-header">
                        Devengado
                    </div>
                    <div class="p-4">
                        <table class="table align-middle">
                            <thead>
                                <tr>
                                    <th scope="col">Alimentacion %</th>
                                    <th scope="col">Aux Vivienda %</th>
                                    <th scope="col">Aux Transporte %</th>
                                    <th scope="col">Bonificacion %</th>
                                    <th scope="col">Fecha</th>
                                    <th scope="col" colspan="2">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- <?php
                                /*$s = $db->prepare('SELECT id,alimentacion,vivienda,transporte,extra,fecha from public.devengado');
                                $s->execute();
                                $devengado = $s->fetchAll();
                                foreach ($devengado as $deven) {
                                    echo '<tr><td>' . $deven['alimentacion'] . '</td>' . '<td>' . $deven['vivienda'] . '</td>' . '<td>' . $deven['transporte'] . '</td>' . '<td>' . $deven['extra'] . '</td>' . '<td>' . $deven['fecha'] . '<td>' . "<a class='text-success' href='./update.php?devengadoId=" . $deven['id'] . "'><i class='bi bi-pencil-square'></i> </a></td></tr>";
                                }*/
                                ?> --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection
