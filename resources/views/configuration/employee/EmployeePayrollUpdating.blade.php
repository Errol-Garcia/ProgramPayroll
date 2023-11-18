@extends('TemplateAdmin');
@section('content')
    <div class="container-fluid">
        <div class="row center py-5">
            <div class="col-3 ">
                <form action="{{ route('payroll.update', $sueldo) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="diasT" class="form-label">N° Dias Trabajados</label>
                        <input type="text" class="form-control" name="diasT" value="{{ $sueldo->diasT }}"
                            aria-describedby="emailHelp" required>

                        <label for="horasExtra" class="form-label">N° Horas extras</label>
                        <input type="text" class="form-control" name="horasExtra" value="{{ $sueldo->horasExtras }}"
                            aria-describedby="emailHelp" required>

                        <label for="vhora" class="form-label">Valor hora mes</label>
                        <input type="text" class="form-control" name="vhora" value="{{ $sueldo->vhora }}"
                            aria-describedby="emailHelp" required>

                        <label for="bono" class="form-label">Valor Bono</label>
                        <input type="text" class="form-control" name="bono" value="{{ $sueldo->bono }}"
                            aria-describedby="emailHelp" required>
                        <input type="hidden" name="id" value= "{{ $sueldo->id }}">
                        <input type="hidden" name="sueldo" value="{{ $sueldo->sueldoNeto }}">

                        <select class="form-select" name="devengado_id" aria-label="Default select example">
                            <option value="{{ $sueldo->devengado_id }}" selected>{{ $devengado_sueldo->fechaRegistro }}
                            </option>
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
                            <select class="form-select" name="descuento_id" aria-label="Default select example">
                                <option value="{{ $sueldo->descuento_id }}" selected>
                                    {{ $descuento_sueldo->fechaRegistro }}
                                </option>
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
                            {{-- <input type="hidden" name="sueldo" value="{{ $employee->sueldo }}"> --}}
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
