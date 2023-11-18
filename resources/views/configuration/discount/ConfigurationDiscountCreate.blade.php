@extends('TemplateAdmin');
@section('content')
    <div class="container-fluid">
        <div class="row center py-2">
            <div class="col-3 ">
                <form action="{{ route('discount.store') }}" method="POST">
                    @include('configuration.discount.ConfigurationDiscountForm')
                    <br>
                    <button type="submit" class="btn btn-primary">Crear</button>
                </form>
            </div>
        </div>
    </div>
@endsection
