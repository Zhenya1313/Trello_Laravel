@extends('layouts.app')

@section('title-block')
    {{$data->task}}
@endsection

@section('content')
    <h1>{{$data->task}}</h1>
        <div class="alert alert-info">
            <h3>{{ $data->details }}</h3>
            <p><small>Создано: {{ $data->created_at }} </small></p>
            <p><small>Выполнить до: {{ $data->date }}</small></p>
            <h5>@if ($data->published == true)
                    Виконано
                @else
                    Виконується
                @endif
            </h5>
            <img src="{{ asset('storage/uploads/' . $data->path ) }}" width="189" height="255">
            <a href="{{ route('task-update', $data->id) }}">
                <button type="button" class="btn btn-primary btn-icon">
                    <span class="icon"><i class="fa fa-edit"></i></span>Edit
                </button>
            </a>
            <a href="{{ route('task-delete', $data->id) }}">
                <button type="button" class="btn btn-danger btn-icon">
                    <span class="icon"><i class="fa fa-trash"></i></span>Delete
                </button>
            </a>
        </div>
@endsection
