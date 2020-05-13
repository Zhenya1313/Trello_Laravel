@extends('layouts.app')

@section('title-block')
    Контакты
@endsection

@section('content')
    <div class="col-4">
    <h1>Проект</h1>



    <form action="{{ route('contact-form') }}" method="post">

{{--        ключ для безопастности в форме--}}
        @csrf

        <div class="form-group">
            <label for="name">Введите название</label>
            <input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="emai">Введите E-mail</label>
            <input type="text" name="email" placeholder="Введите E-mail" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="subject">Тема сообщения</label>
            <input type="text" name="subject" placeholder="Тема сообщения" id="subject" class="form-control">
        </div>

        <div class="form-group">
            <label for="message">Сообщение</label>
            <textarea name="message" id="message" class="form-control" placeholder="Бла, бла, бл..."></textarea>
        </div>

        <button type="submit" class="btn btn-success">Отправить</button>

    </form>
    </div>>
@endsection
