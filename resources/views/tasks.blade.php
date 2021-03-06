@extends('layouts.app')

@section('title-block')
    Задачи
@endsection

@section('content')
    <h1>Все задачи</h1>

{{--        <div >--}}
{{--        <div class="alert alert-info">--}}
{{--            <h3>{{ $el->task }}</h3>--}}
{{--            <p><small>Добавлено: {{ $el->created_at }}</small></p>--}}
{{--            <p><small>Выполнить до: {{ $el->date }}</small></p>--}}
{{--            <a href="{{ route('task-data-one', $el->id) }}">--}}
{{--                <button type="button" class="btn btn-warning btn-icon">--}}
{{--                    <span class="icon"><i class="fa fa-align-left"></i></span>Детальнее--}}
{{--                </button>--}}
{{--            </a>--}}
{{--            <input type="radio" name="published" value="{{ $el->published }}"/>--}}
{{--            <a>Зроблено</a>--}}
{{--            <input type="radio" name="published" value="{{ $el->published }}"/>--}}


{{--        </div>--}}
{{--        </div>--}}
        <div class="row">
            <div class="col-lg-12">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                    <tr>
                        <th><span class="icon"><i class="fa fa-bookmark"></i></span> Название</th>
                        <th>Выполнить до <span class="icon"><i class="fa fa-calendar"></i></span></th>
                        <th>Cтатус <span class="icon"><i class="fa fa-spinner"></i></span></th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $el)
                    <tr>
                        <td><h5><b>{{ $el->task }}</b></h5></td>
                        <td>{{ $el->date }}</td>
                        <td>
                            @if ($el->published == true)
                                <h5 style="color: green">Виконано <span class="icon"><i class="fa fa-check"></i></span></h5>
                                @else
                                <h5 style="color: darkorange">Виконується <span class="icon"><i class="fa fa-hourglass-half"></i></span></h5>
                                @endif

                        </td>
                        <td>
                            <a href="{{ route('task-data-one', $el->id) }}">
                                <button type="button" class="btn btn-warning btn-icon">
                                    <span class="icon"><i class="fa fa-align-left"></i></span> Детальнее
                                </button>
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('task-update', $el->id) }}">
                                <button type="button" class="btn btn-primary btn-icon">
                                    <span class="icon"><i class="fa fa-edit"></i></span> Edit
                                </button>
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('task-delete', $el->id) }}">
                                <button type="button" class="btn btn-danger btn-icon">
                                    <span class="icon"><i class="fa fa-trash"></i></span> Delete
                                </button>
                            </a>
                        </td>


                    </tr>
                    @endforeach
                    </tbody>

                    <tfoot>
                    <tr>
                        <th>Название</th>
                        <th>Дата создания</th>
                        <th>Выполнить до</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>


@endsection
