@csrf
<div class="mb-3">
    <label for="departamento" class="form-label">Departamtento</label>
    <input type="text" class="form-control" id="departamento" name="departamento"
        value="{{ old('nombre', $departamento) }}" aria-describedby="emailHelp" required>

    <input type="hidden" name="id" value="{{ old('id', $departamento) }}">
</div>
