@csrf
<div class="mb-3">

    <label for="arl" class="form-label">Alimentacion</label>
    <input type="number" step="0.01" class="form-control" id="arl" name="alimentacion"
        value="{{ old('alimentacion', $accrued) }}" aria-describedby="emailHelp" required>
    @error('alimentacion')
        <div class="text-small text-danger">{{ $message }}</div>
    @enderror

    <label for="salud" class="form-label">Vivienda</label>
    <input type="number" step="0.01" class="form-control" id="salud" name="vivienda"
        value="{{ old('vivienda', $accrued) }}" aria-describedby="emailHelp" required>
    @error('salud')
        <div class="text-small text-danger">{{ $message }}</div>
    @enderror

    <label for="s" class="form-label">Transporte</label>
    <input type="number" step="0.01" class="form-control" id="pension" name="transporte"
        value="{{ old('transporte', $accrued) }}" aria-describedby="emailHelp" required>
    @error('transporte')
        <div class="text-small text-danger">{{ $message }}</div>
    @enderror

    <label for="parafiscal" class="form-label">Horas Extras</label>
    <input type="number" step="0.01" class="form-control" id="parafiscal" name="extra"
        value="{{ old('extra', $accrued) }}" aria-describedby="emailHelp" require>
    @error('extra')
        <div class="text-small text-danger">{{ $message }}</div>
    @enderror

    <label for="fec" class="form-label">Fecha</label>
    <input type="date" class="form-control" id="fecha" name="fechaRegistro" required placeholder="YYYY-MM-DD"
        value="{{ old('fechaRegistro', $accrued) }}" aria-describedby="emailHelp" require>
    @error('fechaRegistro')
        <div class="text-small text-danger">{{ $message }}</div>
    @enderror
    {{-- <label for="fec" class="form-label">Fecha</label>
    <input type="date" class="form-control" id="fecha" name="fechaRegistro" required placeholder="YYYY-MM-DD"
        value="{{ old('fechaRegistro', isset($accrued) ? $accrued : '') }}" aria-describedby="emailHelp" require>
    @error('fechaRegistro')
        <div class="text-small text-danger">{{ $message }}</div>
    @enderror --}}

</div>
