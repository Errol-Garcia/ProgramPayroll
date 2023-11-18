@csrf
<div class="card mx-auto">
    <label for="cargo" class="form-label">Cargos</label>
    <input type="text" class="form-control" id="cargo" name="nombre"value="{{ old('nombre', $post) }}"
        aria-describedby="emailHelp" required>
    @error('nombre')
        <div class="text-small text-danger">{{ $message }}</div>
    @enderror

</div>



