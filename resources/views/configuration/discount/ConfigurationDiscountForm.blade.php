@csrf

<div class="mb-3">
    <label for="arl" class="form-label">ARL</label>
    <input type="number" step="0.001" class="form-control" id="arl" name="arl"
        value="{{ old('arl', $descuento) }}" required>

    <label for="salud" class="form-label">Salud</label>
    <input type="number" step="0.001" class="form-control" id="salud" name="salud"
        value="{{ old('salud', $descuento) }}" aria-describedby="emailHelp" required>

    <label for="s" class="form-label">Pension</label>
    <input type="number" step="0.001" class="form-control" id="pension" name="pension"
        value="{{ old('pension', $descuento) }}" aria-describedby="emailHelp" required>

    <label for="parafiscal" class="form-label">Parafiscal</label>
    <input type="number" step="0.001" class="form-control" id="parafiscal" name="parafiscal"
        value="{{ old('parafiscal', $descuento) }}" aria-describedby="emailHelp" require>
    <input type="hidden" name="id" value="{{ old('id', $descuento) }}">

    <label for="parafiscal" class="form-label">Fecha</label>
    <input type="date" class="form-control" id="Fecha" name="fecha"
        value="{{ old('fechaRegistro', $descuento) }}" aria-describedby="emailHelp" require>
</div>
