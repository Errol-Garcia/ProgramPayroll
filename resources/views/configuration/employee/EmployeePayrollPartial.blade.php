@extends('TemplateAdmin');
@section('content')
    <div class="container">
        <div class="row py-2">
            <div class="col-3">
                {{ $cedula = '' }}
                <form action="{{ route('payroll.create') }}" method="GET">
                    @csrf
                    <div class="card" style="width: 17rem;">
                        <div class="card-header">
                            Consulta Empleado
                        </div>
                        <div class="card-body card-flex">

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
                        <strong>Registrado</strong> se agrego con exito..
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
                            <strong>Empleado</strong> ya tiene registrada la pre nomina..
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @else
                        <form action="{{ route('payroll.store') }}" method="POST">
                            @csrf
                            <div class="card" style="width: 50rem;">
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
                            <div class="card" style="width: 50rem;">
                                <div class="card-header">Informacion correspondiente el mes laborado</div>
                                <div class="card-body">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td><input type="text" name="diasT" placeholder="Dias Trabajados"
                                                        class="form-control" aria-label="Sizing example input"
                                                        aria-describedby="inputGroup-sizing-default"></td>

                                                <td><input type="text" name="horasExtra" placeholder="N° horas extras"
                                                        class="form-control" aria-label="Sizing example input"
                                                        aria-describedby="inputGroup-sizing-default"></td>


                                                <td><input type="text" name="vhora" placeholder="Valor hora mes"
                                                        class="form-control" aria-label="Sizing example input"
                                                        aria-describedby="inputGroup-sizing-default"></td>

                                                <td><input type="text" name="bono" placeholder="Valor bono mes"
                                                        class="form-control" aria-label="Sizing example input"
                                                        aria-describedby="inputGroup-sizing-default"></td>
                                                <td>
                                                    <select class="form-select" name="devengado_id"
                                                        aria-label="Default select example">
                                                        <option value="" selected>Devengado</option>
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
                                                    <select class="form-select" name="descuento_id"
                                                        aria-label="Default select example">
                                                        <option value="" selected>Descuento</option>
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
                        <strong>Empleado</strong> Empleado no existe..
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                {{-- @endif --}}
                {{-- @endisset --}}
            </div>
        </div>
    </div>
@endsection
