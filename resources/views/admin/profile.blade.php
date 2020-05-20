
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-3 col-md-2 col-lg-2 col-xl-2">
                @include('menu.left')
            </div>
            <div class="col-12 col-sm-9 col-md-10 col-lg-10 col-xl-10" style="padding-left: 20px">
                <div class="row">
                    <div class="col-12">
                    <img src="/uploads/avatars/{{$user->avatar}}" style="width: 150px; height: 150px; float:left; border-radius:50%; margin-right: 25px; ">
                    <h2>{{$user->name}} </h2>
                        <h3>{{$user->email}} </h3>

                    <form enctype="multipart/form-data" action="/profile" method="POST">
                        <h5>Обновить аватар</h5>
                        <input type="file" name="avatar">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-primary">Сохранить</button>
                    </form>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" align="center">
                @include('footer.footer')
            </div>
        </div>
    </div>



@endsection
