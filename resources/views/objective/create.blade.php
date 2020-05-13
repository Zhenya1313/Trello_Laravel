@extends('layouts.app')

@section('content')

    <div class="container">

        <form action="{{ route('objective.store') }}" method="post">
            @csrf
            @include('objective.form')
        </form>
    </div>

@endsection
