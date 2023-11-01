@extends('TemplateAdmin');
@section('content')
    <div class="container-fluid">
        <div class="row center py-2">
            <div class="col-3 ">
                <form action="{{ route('accrued.update', $devengado) }}" method="POST">
                    @method('PUT')
                    @include('configuration.accrued.ConfigurationAccruedForm')

                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
