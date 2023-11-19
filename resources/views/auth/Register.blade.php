@extends('TemplateAdmin')

@section('content')
    <div class="container-sm 100% wide until small breakpoint">
        <div class="row center py-2">
            <div class="col-md-3">
                <div class="my-4">
                    <p class="center">Registrate</p>

                    <form action="{{ route('save') }}" method="post">
                        @csrf
                        <td>
                            <label for="rol_id" class="mx-auto py-2">Nombre completo:</label>
                            <input id="name" name="name" type="text" class="form-control"
                                placeholder="Nombre completo">
                            <div class="input-group-append py-2">
                            </div>
                            @error('name')
                                <div class="text-small text-danger">{{ $message }}</div>
                            @enderror
                        </td>
                        <td>
                            <label for="rol_id" class="mx-auto py-2">usuario:</label>
                            <div class="input-group mb-3">
                                <input id="email" name="email" type="email" class="form-control"
                                    placeholder="Usuario ">
                                <div class="input-group-append">
                                </div>
                            </div>
                            @error('usuario')
                                <div class="text-small text-danger">{{ $message }}</div>
                            @enderror
                        </td>
                        <td>
                            <label for="rol_id" class="mx-auto py-2">Contraseña:</label>
                            <div class="input-group mb-3">
                                <input id="password" name="password" type="password" class="form-control"
                                    placeholder="Contraseña">
                                <div class="input-group-append">
                                </div>
                            </div>
                            @error('password')
                                <div class="text-small text-danger">{{ $message }}</div>
                            @enderror
                        </td>
                        <label for="cedula" class="mx-auto py-2">Cedula:</label>
                        <div class="input-group mb-3">
                            <input id="email" name="email" type="email" class="form-control" placeholder="Cedula ">
                            <div class="input-group-append">
                            </div>
                        </div>
                        </td>

                        <td>
                            <label for="rol_id" class="mx-auto py-2">Rol id:</label>
                            <select class="form-select" name="rol_id" aria-label="Default select example">
                                <option value="" selected>Seleccionar</option>
                                @isset($roles)
                                    @foreach ($roles as $rol)
                                        <option value="{{ $rol->id }}">
                                            @isset($rol)
                                                @selected(old('rol_id', $rol) == $rol->id)
                                            @else
                                                @selected(old('rol_id', $rol) == $rol->id)
                                            @endisset
                                            {{ $rol->nombre }}
                                        </option>
                                    @endforeach
                                @endisset
                            </select>
                            @error('rol_id')
                                <div class="text-small text-danger">{{ $message }}</div>
                            @enderror
                        </td>
                    </form>

                    <div class="col-4 center py-4">
                        <button type="submit" class="btn btn-primary btn-block">
                            Registrar
                        </button>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
