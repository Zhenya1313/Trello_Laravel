@extends('layouts.app')

@section('title-block')
    Все сообщения
@endsection

@section('content')
    <div class="col-6">
    <h1>Твои проекты</h1>
    @foreach($data as $el)
        <div class="alert alert-info">
            <h3>{{ $el->subject }}</h3>
            <p>{{ $el->email }}</p>
            <p><small>{{ $el->created_at }}</small></p>
            <a href="{{ route('contact-data-one', $el->id) }}">
                <button type="button" class="btn btn-warning btn-icon">
                    <span class="icon"><i class="fa fa-align-left"></i></span>Детальнее
                </button>
            </a>

            <a href="{{ route('contact-data-one', $el->id) }}">
                <button type="button" class="btn btn-dark btn-icon">
                    <span class="icon"><i class="fa fa-tasks"></i></span>Задачи
                </button>
            </a>
        </div>


    @endforeach
    </div>
@endsection

