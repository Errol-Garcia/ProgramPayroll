@extends('TemplateAdmin');
@section('content')
    <div class="container-fluid">
        <div class="row center py-2">
            <div class="col-md-7">
                <div class="card mx-auto">
                    <div class="card-header">
                        Log nomina
                    </div>
                    <div class="p-4">
                        <table class="table align-middle">
                            <thead>
                                <tr>
                                    <th style="text-align: center" scope="col">#</th>
                                    <th style="text-align: center" scope="col">Cedula</th>
                                    <th style="text-align: center" scope="col">Nombres</th>
                                    <th style="text-align: center" scope="col">Apellidos</th>
                                    <th style="text-align: center" scope="col">Telefono</th>
                                    <th style="text-align: center" scope="col">valor devevengado</th>
                                    <th style="text-align: center" scope="col">valor descuento</th>
                                    <th style="text-align: center" scope="col">Sueldo Neto</th>
                                    <th style="text-align: center" scope="col">Fecha</th>
                                </tr>
                            </thead>
                            <tbody>
                                @isset($sueldos)
                                    <?php $cont = 1; ?>
                                    @foreach ($sueldos as $sueldo)
                                        <tr>
                                            <td style="text-align: center">{{ $cont }}</td>
                                            <td style="text-align: center">{{ $sueldo->cedula }}</td>
                                            <td style="text-align: center">{{ $sueldo->nombres }}</td>
                                            <td style="text-align: center">{{ $sueldo->apellidos }}</td>
                                            <td style="text-align: center">{{ $sueldo->telefono }}</td>
                                            <td style="text-align: center">{{ number_format($sueldo->valorDevengado) }}</td>
                                            <td style="text-align: center">{{ number_format($sueldo->valorDescuento) }}</td>
                                            <td style="text-align: center">{{ number_format($sueldo->sueldoNeto) }}</td>
                                            <td style="text-align: center">{{ $sueldo->fechaRegistro }}</td>
                                        </tr>
                                        <?php $cont++; ?>
                                    @endforeach
                                @endisset
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection
