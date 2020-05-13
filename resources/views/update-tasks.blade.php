@extends('layouts.app')

@section('title-block')
    Обновление задачи
@endsection

@section('content')
    <h1>Обновление задачи</h1>


    <form action="{{ route('task-update-submit', $data->id) }}" method="post">

        {{--        ключ для безопастности в форме--}}
        @csrf


        <div class="form-group">
            <label for="task">Задача</label>
            <input type="text" name="task" value="{{ $data->task }}" placeholder="...." id="task" class="form-control">
        </div>

        <div class="form-group">
            <label for="details">Детальнее</label>
            <textarea name="details" id="details" class="form-control" placeholder="Бла, бла, бл...">{{ $data->details}}"</textarea>
        </div>

        <div class="form-group">
            <label for="date">Выполнить до:</label>
            <input type="date" name="date" value="{{ $data->date }}" id="date" class="form-control">
        </div>

        <div class="form-group">
            <label for="date">Выбрать файл:</label>

        </div>

        <div class="form-group">
            <select class="custom-select" name="published" required>
                <option value="0">Виконується</option>
                <option value="1">Виконано</option>
            </select>
            <div class="invalid-feedback">Example invalid custom select feedback</div>
        </div>



        <button type="submit" class="btn btn-success">Обновить</button>
    </form>
@endsection
