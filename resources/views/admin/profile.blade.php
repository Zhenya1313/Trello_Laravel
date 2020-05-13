@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-2">
            @include('menu.left')
        </div>
        <div class="col-8">
            <img src="/uploads/avatars/{{$user->avatar}}" style="width: 150px; height: 150px; float:left; border-radius:50%; margin-right: 25px; ">
            <h2>{{$user->name}} </h2>
            <form enctype="multipart/form-data" action="/profile" method="POST">
                <h5>Обновить аватар</h5>
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </form>
        </div>
    </div>

@endsection
