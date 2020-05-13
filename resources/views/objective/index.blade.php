@extends('layouts.app')

@section('content')

    <div class="row">
        <nav class="col-md-2  sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="/home">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                            Home <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/project">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                            Проект
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                            Профиль
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
                            Статистика
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                            Help
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Задачи</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <a href="{{ route('objective.create') }}" class="btn btn-outline-primary -pull-right">
                        <i class="fa fa-plus"></i> Cоздать задачу
                    </a>
                </div>

            </div>
<div class="container">
    <div class="row">
        <div class="сol-12 col-sm-12 col-md-12">
            <br>
            <table id="example" class="table table-striped " style="width:100%">
                <thead>
                <tr>
                    <th><span class="icon"><i class="fa fa-bookmark"></i></span> Название</th>
                    <th>Даты <span class="icon"><i class="fa fa-calendar"></i></span></th>
                    <th>Cтатус <span class="icon"><i class="fa fa-calendar"></i></span></th>
                    <th>Люди <span class="icon"><i class="fa fa-spinner"></i></span></th>
                    <th>Действия</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @forelse($objective as $objective)
                    <tr>
                        <td style="vertical-align: middle"><a><h4>{{ $objective->title ?? '' }}</h4></a></td></td>
                        <td>
                            <p><strong>Обновлено:</strong> {{ $objective->updated_at ?? '' }}</p>
                            <p><strong>Выполнить до:</strong> {{ $objective->date ?? '' }} {{ $objective->time ?? '' }}</p>
                        </td>
                        <td style="vertical-align: middle">
                            @if ($objective->status == 1)
                                <h5 style="color: green; " >Выполнено <span class="icon"><i class="fa fa-check"></i></span></h5>
                            @elseif($objective->status == 2)
                                <h5 style="color: darkorange; " >Выполняеться <span class="icon"><i class="fa fa-hourglass-half"></i></span></h5>
                            @else()

                            @endif
                        </td>
                        <td>
                            <p><strong>Создатель:</strong> {{ $objective->user_login ?? '' }}</p>
                            <p><strong>Исполнитель</strong> dmytroshevchenko@gmail.com</p>
                        </td>
                        <td style="vertical-align: middle">
                            <form onsubmit="if(confirm('Удалить?')){return true} else{return false}"
                                  action="{{route('objective.destroy', $objective->id)}}" method="post">
                                {{method_field('DELETE') }}
                                {{ csrf_field() }}
                                <a class="btn btn-default" href="{{route('objective.edit', $objective)}}">
                                    <i class="fa fa-edit" style="color: blue; vertical-align: middle"></i>
                                </a>
                                <button type="submit" class="btn"><i class="fa fa-trash-o" style="color: red; vertical-align: middle "></i></button>
                            </form>
                        </td>
                        <td></td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">
                            <h1 class="text-center" style="color: royalblue">Проекты отсутствуют!</h1>
                        </td>
                    </tr>
                @endforelse
                </tbody>
                <tfoot>
                <tr>
                    <th><span class="icon"><i class="fa fa-bookmark"></i></span> Название</th>
                    <th>Время <span class="icon"><i class="fa fa-calendar"></i></span></th>
                    <th>Время <span class="icon"><i class="fa fa-calendar"></i></span></th>
                    <th>Cтатус <span class="icon"><i class="fa fa-spinner"></i></span></th>
                    <th>Действия</th>
                    <th></th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>




@endsection
