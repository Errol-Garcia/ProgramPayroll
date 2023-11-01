@csrf
<table class="tdEmpleado">
    <tr>
        <td><input type="text" placeholder="Cedula" class="form-control" id="cedula" name="cedula"
                value="{{ old('cedula', $empleado) }}" aria-describedby="emailHelp" required>
        </td>
        <td><input placeholder="Nombres" value="{{ old('nombres', $empleado) }}" type="text" id="nombres"
                name="nombres" class="form-control" aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-default">
        </td>
        <td><input placeholder="Apellidos" value="{{ old('apellidos', $empleado) }}" type="text" id="apellidos"
                name="apellidos" class="form-control" aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-default">
        </td>
    </tr>
    <tr>
        <td><input placeholder="Telefono" value="{{ old('telefono', $empleado) }}" type="text" id="telefono"
                name="telefono" class="form-control" aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-default">
        </td>
        <td colspan="2"><input placeholder="Direccion" value="{{ old('direccion', $empleado) }}" type="text"
                id="direccion" name="direccion" class="form-control" aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-default">
        </td>
    </tr>
    <tr>
        <td colspan="3"><input placeholder="Email" value="{{ old('email', $empleado) }}" type="text"
                id="email" name="email" class="form-control" aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-default">
        </td>
    </tr>
    <tr>
        <td>
            <input placeholder="Salario" type="text" value="{{ old('salario', $empleado) }}" id="salario"
                name="salario" class="form-control" aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-default">
            <input type="hidden" name="id" value="{{ old('id', $empleado) }}">
        </td>
        <td>
            <label for="" style="display: flex; justify-content: Center;">Cargo</label>
            <select class="form-select" name="cargo" aria-label="Default select example">
                <option selected>Seleccionar</option>
                @isset($cargo)
                    @foreach ($cargo as $car)
                        <option value="{{ $car->id }}">
                            @isset($empleado)
                                @selected(old('cargo_id', $empleado) == $empleado->cargo_id)
                            @else
                                @selected(old('cargo_id', $empleado) == $car->id)
                            @endisset
                            {{ $car->nombre }}
                        </option>
                    @endforeach
                @endisset
            </select>
        </td>
        <td>
            <label for="" style="display: flex; justify-content: Center;">Departamento</label>
            <select class="form-select" name="departamento" aria-label="Default select example">
                <option selected>Seleccionar</option>
                @isset($departamento)
                    @foreach ($departamento as $depart)
                        <option value="{{ $depart->id }}">
                            @isset($empleado)
                                @selected(old('departamento_id', $empleado) == $empleado->departamento_id)
                            @else
                                @selected(old('departamento_id', $empleado) == $depart->id)
                            @endisset
                            {{ $depart->nombre }}
                        </option>
                    @endforeach
                @endisset
            </select>
        </td>
    </tr>
</table>
