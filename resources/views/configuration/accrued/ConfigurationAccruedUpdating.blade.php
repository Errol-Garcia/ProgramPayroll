@extends('TemplateAdmin');
@section('content')
    <div class="container-fluid">
        <div class="row center py-2">
            <div class="col-3 ">
                <form action="{{ route('accrued.update', $accrued) }}" method="POST">
                    @method('PUT')
                    @include('configuration.accrued.ConfigurationAccruedForm')

                    <button class="btn btn-primary btn-lg" type="submit">Actualizar</button>

                </form>
            </div>
        </div>
    </div>
@endsection
