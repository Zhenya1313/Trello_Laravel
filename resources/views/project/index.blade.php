
@extends('layouts.app')

@section('content')
    <div class="container">
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


            <div class="row">
                @forelse($projects as $project)
                    <div class=" сol-12 col-sm-6 col-md-6 col-lg-6 col-xl-6" style="margin-top: 30px">
                        <div class="card" style="width: 100%">
                            <img class="card-img-top" src="project.jpg" >
                            <div class="card-body" >
                                <a href="{{route('project.show', ["id"=>$project->project_id])}}"><h3 align="center" class="card-title" >{{ $project->title ?? '' }}</h3></a>
                                <hr style="width: 90%">
                                <p class="card-text">
                                <h5><details>
                                        <summary>Даты <span class="icon"><i class="fa fa-calendar"></i></span></summary>
                                        <p>Обновлено: {{ $project->updated_at ?? '' }}</p>
                                        <p>Выполнить до: {{ $project->date ?? '' }} {{ $project->time ?? '' }}</p>
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
                                        <summary>Подключение <span class="icon"><i class="fa fa-server" aria-hidden="true"></i></span></summary>
                                        <p>Host: {{ $project->host ?? '' }}</p>
                                        <p>Port: {{ $project->port ?? '' }}</p>
                                        <p>User name: {{ $project->host_name ?? '' }}</p>
                                        <p>Password: {{ $project->parol ?? '' }}</p>
                                    </details>
                                </h5>
                                <hr style="width: 90%">
                                <h5>
                                    <p>Создатель: <img src="/uploads/avatars/{{Auth::user()->avatar}}" style="width: 30px; height: 30px;   left:10px; border-radius:50%; "> {{ $project->user_email ?? '' }}</p>
                                </h5>
                            </div>

                        </div>
                    </div>
                @empty
                @endforelse
            </div>


    </main>
</div>
    </div>

<div class="col-12" align="center">
    @include('footer.footer')
</div>
@endsection


