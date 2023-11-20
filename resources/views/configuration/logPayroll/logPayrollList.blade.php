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
                                @isset($salaries)
                                    <?php $cont = 1; ?>
                                    @foreach ($salaries as $salary)
                                        <?php $employee = $salary['employee']; ?>
                                        <tr>
                                            <td style="text-align: center">{{ $cont }}</td>
                                            <td style="text-align: center">{{ $employee['identification_card'] }}</td>
                                            <td style="text-align: center">{{ $employee['names'] }}</td>
                                            <td style="text-align: center">{{ $employee['last_names'] }}</td>
                                            <td style="text-align: center">{{ $employee['number_phone'] }}</td>
                                            <td style="text-align: center">{{ number_format($salary['accrued_value']) }}</td>
                                            <td style="text-align: center">{{ number_format($salary['discount_value']) }}</td>
                                            <td style="text-align: center">{{ number_format($salary['net_income']) }}</td>
                                            <td style="text-align: center">{{ $salary['registration_date'] }}</td>
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
