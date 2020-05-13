@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
    <form action="{{route('admin.user_managment.user.store')}} " method="post">
        {{csrf_field()}}

        @include('admin.user_managment.users.partials.form')
    </form>
    </div>
@endsection
