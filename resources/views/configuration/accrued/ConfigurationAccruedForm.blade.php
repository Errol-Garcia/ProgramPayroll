@csrf
<div class="mb-3">
    <label for="arl" class="form-label">Alimentacion</label>
    <input type="number" class="form-control" id="arl" name="alimentacion"
        value="{{ old('alimentacion', $devengado) }}" aria-describedby="emailHelp" required>

    <label for="salud" class="form-label">Vivienda</label>
    <input type="number" class="form-control" id="salud" name="vivienda" value="{{ old('vivienda', $devengado) }}"
        aria-describedby="emailHelp" required>

    <label for="s" class="form-label">Transporte</label>
    <input type="number" class="form-control" id="pension" name="transporte"
        value="{{ old('transporte', $devengado) }}" aria-describedby="emailHelp" required>

    <label for="parafiscal" class="form-label">Horas Extras</label>
    <input type="number" class="form-control" id="parafiscal" name="extra" value="{{ old('extras', $devengado) }}"
        aria-describedby="emailHelp" require>

    <input type="hidden" name="id" value="{{ old('extras', $devengado) }}">

    <label for="fec" class="form-label">Fecha</label>
    <input type="date" class="form-control" id="fecha" name="fecha" required placeholder="YYYY-MM-DD"
        value="{{ old('fechaRegistro', $devengado) }}" aria-describedby="emailHelp" require>
</div>
