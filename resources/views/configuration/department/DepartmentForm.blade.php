@csrf
<div class="card mx-auto">
    <label for="departamento" class="form-label">Departamtento</label>
    <input type="text" class="form-control" id="departamento" name="nombre" value="{{ old('nombre', $department) }}"
        aria-describedby="emailHelp" required>
    @error('nombre')
        <div class="text-small text-danger">{{ $message }}</div>
    @enderror

</div>
