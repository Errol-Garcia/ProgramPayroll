@extends('TemplateAdmin');
@section('content')
    <div class="container p" >
        <div class="row py-4">
            <div class="col-3" >
                {{ $cedula = '' }}
                <form action="{{ route('payroll.create') }}" method="GET">
                    @csrf
                    <div class="card" style="width: 17rem; ">
                        <div class="card-header">
                            Consulta Empleado
                        </div>
                        <div class="card-body card-flex mx-auto">

                            <input type="text" name="cedula" placeholder="Cedula" class="form-control"
                                aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            <button type="submit" class="btn btn-primary btn-buscar" id="btn-buscar">Buscar</button>
                        </div>
                    </div>
                </form>
                <div class="my-4">
                    <?php
                if(isset($_GET['mensaje']) and $_GET['mensaje']=='registrado'){
            ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Registrado</strong> se agrego con exito...
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php
                }
            ?>

                    {{-- <?php
                if(isset($_GET['mensaje']) and $_GET['mensaje']=='Error'){
            ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error</strong> vuelve a intentarlo..
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php
                }
            ?> --}}
                </div>
            </div>
            <div class="col-9">
                {{-- @isset($_POST['cedula']) --}}
                {{-- @if (/*isset($cedula) &&*/ $cedula != null) --}}
                @if (isset($employee) && $employee != null)
                    @if (isset($sueldo) && $sueldo != null)
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Empleado</strong> ya tiene registrada la pre nomina...
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @else
                        <form action="{{ route('payroll.store') }}" method="POST">
                            @csrf
                            <div class="card mx-auto" style="width: 55rem;">
                                <div class="card-header">Empleados</div>
                                <div class="p-4">
                                    <table class="table align-middle">
                                        <thead>
                                            <tr>
                                                <th scope="col">Nombres</th>
                                                <th scope="col">Apellidos</th>
                                                <th scope="col">Telefono</th>
                                                <th scope="col">sueldo</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ $employee->nombres }}</td>
                                                <td>{{ $employee->apellidos }}</td>
                                                <td>{{ $employee->telefono }}</td>
                                                <td>{{ $employee->sueldo }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div><br>
                            <div class="card mx-auto" style="width: 55rem;">
                                <div class="card-header">Informacion correspondiente el mes laborado</div>
                                <div class="card-body">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <label for="diasT" class="center py-2">Días trabajados:</label>
                                                    <input type="text" id="diasT" name="diasT"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                                </td>


                                                <td>
                                                    <label for="horasExtra" class="center mx-auto py-2">N° horas extras:</label>
                                                    <input type="text" name="horasExtra"
                                                        class="form-control" aria-label="Sizing example input"
                                                        aria-describedby="inputGroup-sizing-default">
                                                    </td>


                                                <td>
                                                    <label for="vhora" class="center mx-auto py-2">Valor bono mes:</label>
                                                    <input type="text" name="vhora"
                                                        class="form-control" aria-label="Sizing example input"
                                                        aria-describedby="inputGroup-sizing-default">
                                                    </td>

                                                <td>
                                                    <label for="bono" class="center mx-auto py-2">Bono:</label>
                                                    <input type="text" name="bono"
                                                        class="form-control" aria-label="Sizing example input"
                                                        aria-describedby="inputGroup-sizing-default">
                                                    </td>
                                                <td>
                                                    <label for="devengado_id" class="center mx-auto py-2">Devgado ID:</label>
                                                    <select class="form-select" name="devengado_id"
                                                        aria-label="Default select example">
                                                        <option value="" selected>Seleccionar</option>
                                                        @isset($devengado)
                                                            @foreach ($devengado as $accrued)
                                                                <option value="{{ $accrued->id }}">
                                                                    {{ $accrued->fechaRegistro }}
                                                                </option>
                                                            @endforeach
                                                        @endisset
                                                    </select>
                                                    @error('devengado_id')
                                                        <div class="text-small text-danger">{{ $message }}</div>
                                                    @enderror
                                                </td>
                                                <td>
                                                    <label for="descuento_id" class="center mx-auto py-2">Descuento ID:</label>
                                                    <select class="form-select" name="descuento_id"
                                                        aria-label="Default select example">
                                                        <option value="" selected>Seleccionar</option>
                                                        @isset($descuento)
                                                            @foreach ($descuento as $discount)
                                                                <option value="{{ $discount->id }}">
                                                                    {{ $discount->fechaRegistro }}
                                                                </option>
                                                            @endforeach
                                                        @endisset
                                                    </select>
                                                    @error('descuento_id')
                                                        <div class="text-small text-danger">{{ $message }}</div>
                                                    @enderror
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="center">
                                <input type="hidden" name="empleado_id" value="{{ $employee->id }}">
                                <input type="hidden" name="sueldo" value="{{ $employee->sueldo }}">
                                <button type="submit" class="btn btn-primary btn-dsdv">Registrar</button>
                            </div>
                        </form>
                    @endif
                @else
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Empleado</strong> Empleado no existe...
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
