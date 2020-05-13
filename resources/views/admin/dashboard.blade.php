@extends('admin.layouts.app_admin')

@section('content')

 <div class="container">
     <div class="row">
        <div class="col-sm-3">
            <div class="jumbotron">
                <p><span class="label label-primary">Проекти: {{$count_projects_all}}</span></p>
            </div>
        </div>
         <div class="col-sm-3">
             <div class="jumbotron">
                 <p><span class="label label-primary">Проекти выполнены: {{$count_projects_ready}}</span></p>
             </div>
         </div>
         <div class="col-sm-3">
             <div class="jumbotron">
                 <p><span class="label label-primary">Проекти в процесе: {{$count_projects_process}}</span></p>
             </div>
         </div>
         <div class="col-sm-3">
             <div class="jumbotron">
                 <p><span class="label label-primary">Задачи: {{$count_objectives}}</span></p>
             </div>
         </div>
         <div class="col-sm-3">
             <div class="jumbotron">
                 <p><span class="label label-primary">Учасники проекта: {{$count_users}}</span></p>
             </div>
         </div>
         <div class="col-sm-3">
             <div class="jumbotron">
                 <p><span class="label label-primary">Пользователи сегодня 0</span></p>
             </div>
         </div>
     </div>

     <div class="row">
         <div class="col-6">
             <a href="{{route('project.create')}}">
                 <button class="btn btn-outline-primary"><i class="fa fa-plus"></i> Создать проект</button>
             </a>
             @foreach($projects as $project)
             <ul class="list-group" style="padding-top: 10px">
                 <li class="list-group-item d-flex justify-content-between align-items-center">
                     <a class="" style="text-decoration: none; " href="{{route('project.edit', $project)}}">
                         <h4 class="list-group-item-heading">{{$project->title}}</h4>
                     </a>
                     <span class="badge badge-primary badge-pill">{{$project->objectives()->count()}}</span>
                 </li>
             </ul>
             @endforeach
         </div>
         <div class="col-6">
             <a href="{{route('objective.create')}}" >
                 <button class="btn btn-outline-primary"><i class="fa fa-plus"></i> Создать задачу</button>
             </a>
             @foreach($objectives as $objective)
                 <ul class="list-group" style="padding-top: 10px">
                     <li class="list-group-item d-flex justify-content-between align-items-center">
                         <a class="" style="text-decoration: none; " href="{{route('objective.edit', $objective)}}">
                             <h4 class="list-group-item-heading">{{$objective->title}}</h4>
                             <p class="list-group-item-text">
                                 <h6>Проект: {{$objective->projects()->pluck('title')->implode(', ')}}</h6>
                             </p>
                         </a>
                     </li>
                 </ul>
             @endforeach
         </div>
     </div>
 </div>
 <br>
 <div class="container">
     <div class="row">
         <div class="col-12 col-sm-12 col-md-12 col-lg-12">
             <div class="progress">
                 <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
             </div>
        </div>
 </div>
 </div>
@endsection
