
@extends('layouts.app')

@section('content')

{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="сol-12 col-sm-12 col-md-12">--}}
{{--                <div>--}}
{{--                    <a href="{{ route('project.create') }}" class="btn btn-primary -pull-right">--}}
{{--                        <i class="fa fa-plus"></i> Cоздать проект</a>--}}
{{--                </div>--}}
{{--                <br>--}}
{{--                <table id="" class="table table-striped " style="width:100%">--}}
{{--                    <thead>--}}
{{--                    <tr>--}}
{{--                        <th><span class="icon"><i class="fa fa-bookmark"></i></span> Название</th>--}}
{{--                        <th>Время <span class="icon"><i class="fa fa-calendar"></i></span></th>--}}
{{--                        <th>Время <span class="icon"><i class="fa fa-calendar"></i></span></th>--}}
{{--                        <th>Cтатус <span class="icon"><i class="fa fa-spinner"></i></span></th>--}}
{{--                        <th>Действия</th>--}}
{{--                    </tr>--}}
{{--                    </thead>--}}
{{--                    <tbody>--}}
{{--                    @forelse($projects as $project)--}}
{{--                        <tr>--}}
{{--                            заголовок категории--}}
{{--                            <td><a href="{{route('project.show', ["id"=>$project->id])}}"><h4>{{ $project->title ?? '' }}</h4></a></td>--}}
{{--                            <td><p>Обновлено: {{ $project->updated_at ?? '' }}</p>--}}
{{--                                <p>Выполнить до: {{ $project->date ?? '' }} {{ $project->time ?? '' }}</p></td>--}}
{{--                            <td><a>{{ $project->time ?? '' }}</a></td>--}}
{{--                            <td>--}}
{{--                                @if ($project->status == 1)--}}
{{--                                    <h5 style="color: green">Выполнено <span class="icon"><i class="fa fa-check"></i></span></h5>--}}
{{--                                @elseif($project->status == 2)--}}
{{--                                    <h5 style="color: darkorange">Выполняеться <span class="icon"><i class="fa fa-hourglass-half"></i></span></h5>--}}
{{--                                @else()--}}

{{--                                @endif--}}
{{--                            </td>--}}
{{--                            <td align="center">--}}
{{--                                <a class="btn btn-default" href="{{route('project.edit', $project)}}">--}}
{{--                                    <i class="fa fa-edit"></i>--}}
{{--                                </a>--}}
{{--                            </td>--}}
{{--                            <td >--}}

{{--                                <form onsubmit="if(confirm('Удалить?')){return true} else{return false}"--}}
{{--                                      action="{{route('project.destroy', $project->id)}}" method="post">--}}
{{--                                    {{method_field('DELETE') }}--}}
{{--                                    {{ csrf_field() }}--}}
{{--                                    <a class="btn btn-default" href="{{route('project.edit', $project)}}">--}}
{{--                                        <i class="fa fa-edit"></i>--}}
{{--                                    </a>--}}
{{--                                    <button type="submit" class="btn"><i class="fa fa-trash-o"></i></button>--}}
{{--                                </form>--}}
{{--                            </td>--}}

{{--                        </tr>--}}
{{--                    @empty--}}
{{--                        <tr>--}}
{{--                            <td colspan="6">--}}
{{--                                <h1 class="text-center" style="color: royalblue">Проекты отсутствуют!</h1>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                    @endforelse--}}
{{--                    </tbody>--}}
{{--                    <tfoot>--}}
{{--                    <tr>--}}
{{--                        <th><span class="icon"><i class="fa fa-bookmark"></i></span> Название</th>--}}
{{--                        <th>Создано <span class="icon"><i class="fa fa-calendar"></i></span></th>--}}
{{--                        <th>Выполнить до <span class="icon"><i class="fa fa-calendar"></i></span></th>--}}
{{--                        <th>Cтатус <span class="icon"><i class="fa fa-spinner"></i></span></th>--}}
{{--                        <th>Действия</th>--}}
{{--                    </tr>--}}
{{--                    </tfoot>--}}
{{--                </table>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="container">--}}
{{--    <div class="row">--}}
{{--        <div class="сol-12 col-sm-12 col-md-12">--}}
{{--                            <div>--}}
{{--                                <a href="{{ route('project.create') }}" class="btn btn-primary -pull-right">--}}
{{--                                    <i class="fa fa-plus"></i> Cоздать проект</a>--}}
{{--                            </div>--}}
{{--        <br>--}}
{{--    <table id="example" class="table table-striped " style="width:100%">--}}
{{--        <thead>--}}
{{--        <tr>--}}
{{--            <th><span class="icon"><i class="fa fa-bookmark"></i></span> Название</th>--}}
{{--            <th>Время <span class="icon"><i class="fa fa-calendar"></i></span></th>--}}
{{--            <th>Время <span class="icon"><i class="fa fa-calendar"></i></span></th>--}}
{{--            <th>Cтатус <span class="icon"><i class="fa fa-spinner"></i></span></th>--}}
{{--            <th>Действия</th>--}}
{{--            <th>Salary</th>--}}
{{--        </tr>--}}
{{--        </thead>--}}
{{--        <tbody>--}}
{{--        @forelse($projects as $project)--}}
{{--        <tr>--}}
{{--            <td><a href="{{route('project.show', ["id"=>$project->id])}}"><h4>{{ $project->title ?? '' }}</h4></a></td>--}}
{{--            <td><p>Обновлено: {{ $project->updated_at ?? '' }}</p>--}}
{{--                <p>Выполнить до: {{ $project->date ?? '' }} {{ $project->time ?? '' }}</p>--}}
{{--            </td>--}}
{{--            <td><a>{{ $project->time ?? '' }}</a></td>--}}
{{--            <td>@if ($project->status == 1)--}}
{{--                    <h5 style="color: green">Выполнено <span class="icon"><i class="fa fa-check"></i></span></h5>--}}
{{--                @elseif($project->status == 2)--}}
{{--                    <h5 style="color: darkorange">Выполняеться <span class="icon"><i class="fa fa-hourglass-half"></i></span></h5>--}}
{{--                @else()--}}

{{--                @endif--}}
{{--            </td>--}}
{{--            <td><form onsubmit="if(confirm('Удалить?')){return true} else{return false}"--}}
{{--                      action="{{route('project.destroy', $project->id)}}" method="post">--}}
{{--                    {{method_field('DELETE') }}--}}
{{--                    {{ csrf_field() }}--}}
{{--                    <a class="btn btn-default" href="{{route('project.edit', $project)}}">--}}
{{--                        <i class="fa fa-edit"></i>--}}
{{--                    </a>--}}
{{--                    <button type="submit" class="btn"><i class="fa fa-trash-o"></i></button>--}}
{{--                </form>--}}
{{--            </td>--}}
{{--            <td>$320,800</td>--}}
{{--        </tr>--}}
{{--        @empty--}}
{{--            <tr>--}}
{{--                <td colspan="6">--}}
{{--                    <h1 class="text-center" style="color: royalblue">Проекты отсутствуют!</h1>--}}
{{--                </td>--}}
{{--            </tr>--}}
{{--        @endforelse--}}
{{--        </tbody>--}}
{{--        <tfoot>--}}
{{--        <tr>--}}
{{--            <th><span class="icon"><i class="fa fa-bookmark"></i></span> Название</th>--}}
{{--            <th>Время <span class="icon"><i class="fa fa-calendar"></i></span></th>--}}
{{--            <th>Время <span class="icon"><i class="fa fa-calendar"></i></span></th>--}}
{{--            <th>Cтатус <span class="icon"><i class="fa fa-spinner"></i></span></th>--}}
{{--            <th>Действия</th>--}}
{{--            <th>Salary</th>--}}
{{--        </tr>--}}
{{--        </tfoot>--}}
{{--    </table>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    </div>--}}


{{--    <div class="сol-12 col-sm-12 col-md-12">--}}

{{--        <a href="{{ route('project.create') }}" class="btn btn-primary -pull-right">--}}
{{--            <i class="fa fa-plus"></i> Cоздать проект</a>--}}
{{--    </div>--}}



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
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#">--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>--}}
{{--                        Products--}}
{{--                    </a>--}}
{{--                </li>--}}
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
            <h1 class="h2">Проекты</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <a href="{{ route('project.create') }}" class="btn btn-outline-primary -pull-right">
                    <i class="fa fa-plus"></i> Cоздать проект
                </a>
            </div>

        </div>

        <div class="container">
            <div class="row">
                @forelse($projects as $project)
                    <div class=" сol-4 col-sm-4 col-md-4" style="margin-top: 30px">
                        <div class="card" style="width: 100%">
                            <img class="card-img-top" src="project.jpg" >

                            <div class="card-body" >
                                <a href="{{route('project.show', ["id"=>$project->id])}}"><h3 align="center" class="card-title" >{{ $project->title ?? '' }}</h3></a>
                                <hr style="width: 90%">
                                <p class="card-text">
                                <h5><details>
                                        <summary>Даты <span class="icon"><i class="fa fa-calendar"></i></span></summary>
                                        <a>Обновлено: {{ $project->updated_at ?? '' }}</a>
                                        <a>Выполнить до: {{ $project->date ?? '' }} {{ $project->time ?? '' }}</a>
                                    </details>
                                </h5>
                                <hr style="width: 90%">
                                <h5>Cтатус:
                                    @if ($project->status == 1)
                                        <a style="color: green">Выполнено <span class="icon"><i class="fa fa-check"></i></span></a>
                                    @elseif($project->status == 2)
                                        <a style="color: darkorange">Выполняеться <span class="icon"><i class="fa fa-hourglass-half"></i></span></a>
                                    @else()

                                    @endif
                                </h5>
                                <hr style="width: 90%">
                                <h5>
                                    <p>Создатель: </p>
                                    <p align="center"><i class="fa fa-user-circle" aria-hidden="true"></i> {{ $project->user_email ?? '' }}</p>
                                </h5>
                                <hr style="width: 90%">

                                <form onsubmit="if(confirm('Удалить?')){return true} else{return false}"
                                      action="{{route('project.destroy', $project->id)}}" method="post">
                                    {{method_field('DELETE') }}
                                    {{ csrf_field() }}

                                    <a class="btn btn-primary btn-icon" href="{{route('project.edit', $project)}}">
                                        <i class="fa fa-edit"></i>
                                    </a>


                                    <button type="submit" class="btn btn-danger btn-icon "  ><i class="fa fa-trash-o"></i></button>
                                </form>
                            </div>

                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>

    </main>
</div>

@endsection


