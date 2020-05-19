
@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-2">
        @include('menu.left')
    </div>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2"><i class="fa fa-list" aria-hidden="true"></i> Проекты</h1>
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
                                        <a> без статуса </a>

                                    @endif
                                </h5>
                                <hr style="width: 90%">
                                <h5><details>
                                        <summary>Подключение к серверу <span class="icon"><i class="fa fa-server" aria-hidden="true"></i></span></summary>
                                        <p>Host: {{ $project->host ?? '' }}</p>
                                        <p>Port: {{ $project->port ?? '' }}</p>
                                        <p>User name: {{ $project->host_name ?? '' }}</p>
                                        <p>Password: {{ $project->parol ?? '' }}</p>
                                    </details>
                                </h5>
                                <hr style="width: 90%">
                                <h5>
                                    <p>Создатель: </p>
                                    <p align="center"> <img src="/uploads/avatars/{{Auth::user()->avatar}}" style="width: 30px; height: 30px;   left:10px; border-radius:50%; "> {{ $project->user_email ?? '' }}</p>
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

<div class="col-12" align="center">
    @include('footer.footer')
</div>
@endsection


