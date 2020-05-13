@extends('layouts.app')

@section('title-block')
    Tasks
@endsection

@section('content')
    <div class="col-4">
    <h1>Task</h1>


    <form action="{{ route('task-form') }}" method="post" enctype="multipart/form-data">

        {{--        ключ для безопастности в форме--}}
        @csrf


        <div class="form-group">
            <label for="task">Название</label>
            <input type="text" name="task" placeholder="...." id="task" class="form-control">
        </div>

        <div class="form-group">
            <label for="details">Описание</label>
            <textarea name="details" id="details" class="form-control" placeholder="Бла, бла, бл..."></textarea>
        </div>

        <div class="form-group">
            <label for="date">Выполнить до:</label>
            <input type="date" name="date"  id="date" class="form-control">
        </div>

        <div class="form-group">
            <label for="date">Выбрать файл:</label>
            <input type="file" name="image"  id="image">
        </div>

        @isset($path)

            <img class="img-fluid" src="{{ asset('storage/' . $path ) }}">
        @endisset

        <div>
        <button type="submit" class="btn btn-success" >Добавить</button>
        </div>
    </form>
    </div>

@endsection
