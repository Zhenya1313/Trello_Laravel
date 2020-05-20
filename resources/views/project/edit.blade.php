
@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('project.update', $project) }}" method="post">
            @method ('PUT')
            @csrf
            @include('project.form')
        </form>
    </div>

@endsection
