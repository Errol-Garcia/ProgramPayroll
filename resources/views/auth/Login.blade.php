@extends('auth.BaseAuth')
@section('content')
    <form action="{{ route('start') }}" class="conten-login" method="post">
        @csrf
        <div class="conten-header">
            <h1>Login</h1>
        </div>
        <div class="conten-body">
            <div class="conten-caja">
                <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-person"></i></span>
                    <input type="text" class="form-control" name="username" id="validationCustomUsername"
                        aria-describedby="inputGroupPrepend" required>
                </div>
            </div>
            <div class="conten-caja">
                <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-shield-lock"></i></span>
                    <input type="password" class="form-control" name="password" id="inputPassword">
                </div>
            </div>
            <div class="regis">
                <a href="">Registrarse</a>
            </div>

            <div class="conten-caja">
                <button type="submit" class="btn btn-primary mb-3">Iniciar Sesion</button>
            </div>
    </form>
@endsection
