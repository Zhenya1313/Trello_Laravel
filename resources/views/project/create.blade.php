@extends('layouts.app')

@section('content')

    <div class="container">

        <form action="{{ route('project.store') }}" method="post">
            @csrf
            @include('project.form')
        </form>
    </div>

@endsection
