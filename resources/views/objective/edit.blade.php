
@extends('layouts.app')

@section('content')

    <div class="container">
        <form action="{{ route('objective.update', $objective) }}" method="post">
            @method ('PUT')
            @csrf
            @include('objective.form')
        </form>
    </div>

@endsection
