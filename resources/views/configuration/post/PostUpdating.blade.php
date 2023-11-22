@extends('TemplateAdmin');
@section('content')
    <div class="container-fluid">
        <div class="row centrar py-5">
            <div class="col-5 " style="padding-bottom:500px;">
                <form action="{{ route('post.update', $post) }}" method="POST">
                    @method('PUT')
                    @include('configuration.post.PostForm')
                    <br>
                    <div class="center">
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
