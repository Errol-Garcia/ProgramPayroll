@csrf
<table class="tdEmpleado">
    <tr>
        <td><input type="text" placeholder="Cedula" class="form-control" id="cedula" name="cedula"
                value="{{ old('cedula', $employee) }}" aria-describedby="emailHelp" required>
            @error('cedula')
                <div class="text-small text-danger">{{ $message }}</div>
            @enderror
        </td>
        <td><input placeholder="Nombres" value="{{ old('nombres', $employee) }}" type="text" id="nombres"
                name="nombres" class="form-control" aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-default">
            @error('nombres')
                <div class="text-small text-danger">{{ $message }}</div>
            @enderror
        </td>
        <td><input placeholder="Apellidos" value="{{ old('apellidos', $employee) }}" type="text" id="apellidos"
                name="apellidos" class="form-control" aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-default">
            @error('apellidos')
                <div class="text-small text-danger">{{ $message }}</div>
            @enderror
        </td>
    </tr>
    <tr>
        <td><input placeholder="Telefono" value="{{ old('telefono', $employee) }}" type="text" id="telefono"
                name="telefono" class="form-control" aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-default">
            @error('telefono')
                <div class="text-small text-danger">{{ $message }}</div>
            @enderror
        </td>
        <td colspan="2"><input placeholder="Direccion" value="{{ old('direccion', $employee) }}" type="text"
                id="direccion" name="direccion" class="form-control" aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-default">
            @error('direccion')
                <div class="text-small text-danger">{{ $message }}</div>
            @enderror
        </td>
    </tr>
    <tr>
        <td colspan="3"><input placeholder="Email" value="{{ old('email', $employee) }}" type="text"
                id="email" name="email" class="form-control" aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-default">
            @error('email')
                <div class="text-small text-danger">{{ $message }}</div>
            @enderror
        </td>
    </tr>
    <tr>
        <td>
            <input placeholder="Salario" type="text" id="salario" name="sueldo" class="form-control"
                aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
                value="{{ old('sueldo', $employee) }}">
            @error('telefono')
                <div class="text-small text-danger">{{ $message }}</div>
            @enderror
            {{-- <input type="hidden" name="id" value="{{ old('id', $employee) }}"> --}}
        </td>
        <td>
            <select class="form-select" name="cargo_id" aria-label="Default select example">
                <option value="" selected>Seleccionar Cargo</option>
                @isset($cargo)
                    @foreach ($cargo as $car)
                        <option value="{{ $car->id }}">
                            @isset($employee)
                                @selected(old('cargo_id', $employee) == $employee->id)
                            @else
                                @selected(old('cargo_id', $employee) == $car->id)
                            @endisset
                            {{ $car->nombre }}
                        </option>
                    @endforeach
                @endisset
            </select>
            @error('cargo_id')
                <div class="text-small text-danger">{{ $message }}</div>
            @enderror
            {{-- <select class="form-control" name="cargo_id" id="cargo_id">
                <option value="0" selected>Seleccione una categoría </option>
                <!-- old() función que obtiene el valor anterior en la recarga de un formulario
                    o el valor asignado  -->
                @isset($cargos)
                    @foreach ($cargos as $cargo)
                        <option value="{{ $cargo->id }}"
                            @isset($employee)
                                @selected(old('cargo_id', $employee) == $employee->cargo->id)
                            @else
                                @selected(old('cargo_id', $employee) == $cargo->id)
                            @endisset>
                            {{ $cargo->name }}
                        </option>
                    @endforeach
                @endisset
            </select> --}}
        </td>
        <td>
            {{-- <label for="" style="display: flex; justify-content: Center;">Departamento</label> --}}
            <select class="form-select" name="departamento_id" aria-label="Default select example">
                <option value="" selected>Seleccionar Departamento</option>
                @isset($departamento)
                    @foreach ($departamento as $depart)
                        <option value="{{ $depart->id }}">
                            @isset($empleado)
                                @selected(old('departamento_id', $employee) == $employee->id)
                            @else
                                @selected(old('departamento_id', $employee) == $depart->id)
                            @endisset
                            {{ $depart->nombre }}
                        </option>
                    @endforeach
                @endisset
            </select>
            @error('departamento_id')
                <div class="text-small text-danger">{{ $message }}</div>
            @enderror
        </td>
    </tr>
</table>
