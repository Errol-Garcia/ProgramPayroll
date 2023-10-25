@extends('TemplateAdmin');
@section('content')
    <div class="container-fluid">
        <div class="row center py-2">
            <div class="col-3 ">
                <form id="frmDescuento" action="../../services/descuento/create.php" method="POST">
                    <div class="mb-3">
                        <label for="arl" class="form-label">ARL</label>
                        <input type="number" class="form-control" id="arl" name="arl" aria-describedby="emailHelp"
                            required>

                        <label for="salud" class="form-label">Salud</label>
                        <input type="number" class="form-control" id="salud" name="salud"
                            aria-describedby="emailHelp" required>

                        <label for="s" class="form-label">Pension</label>
                        <input type="number" class="form-control" id="pension" name="pension"
                            aria-describedby="emailHelp" required>

                        <label for="parafiscal" class="form-label">Parafiscal</label>
                        <input type="number" class="form-control" id="parafiscal" name="parafiscal"
                            aria-describedby="emailHelp" require>

                        <label for="parafiscal" class="form-label">Fecha</label>
                        <input type="date" class="form-control" id="fecha" name="fecha"
                            aria-describedby="emailHelp" require>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    @endsection
