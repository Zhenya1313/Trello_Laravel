@extends('layouts.app')

@section('content')

 <div class="container">
     <div class="row">
         <div class="col-12 col-sm-3 col-md-2 col-lg-2 col-xl-2">
             @include('menu.left')
         </div>
         <div class="col-12 col-sm-9 col-md-10 col-lg-10 col-xl-10">
     <div class="row" >
         <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4" style="padding-bottom: 10px">
             <div class="card card-inverse" style="border-color: #318fdb">
                 <div class="card-block ">
                     <div class="row" style="padding-top: 20px; padding-bottom: 20px">
                         <div class="col-6" align="center" >
                             <i class="fa fa-list-ol fa-4x" aria-hidden="true" style="color: #318fdb"></i>
                         </div>
                         <div class="col-6" >
                             <div class="row">
                                 <div class="col-12" align="center">
                                     <h5 class="card-text"><strong>ВСЕ</strong></h5>
                                 </div>
                                 <br>
                                 <div class="col-12" align="center">
                                     <h3 ><span class="badge badge-primary badge-pill">{{$count_projects_all}}</span></h3>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

         <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4" style="padding-bottom: 10px">
             <div class="card card-inverse" style="border-color: green">
                 <div class="card-block ">
                     <div class="row" style="padding-top: 20px; padding-bottom: 20px">
                     <div class="col-6" align="center" >
                         <i class="fa fa-calendar-check-o fa-4x" aria-hidden="true" style="color: green"></i>
                     </div>
                     <div class="col-6" >
                         <div class="row">
                             <div class="col-12">
                                 <h5 class="card-text"><strong>ВЫПОЛНЕНО</strong></h5>
                             </div>
                             <br>
                             <div class="col-12" align="center">
                                <h3 ><span class="badge badge-primary badge-pill">{{$count_projects_ready}}</span></h3>
                             </div>
                         </div>
                    </div>
                    </div>
                 </div>
             </div>
         </div>

         <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4" style="padding-bottom: 10px">
             <div class="card card-inverse" style="border-color: darkorange">
                 <div class="card-block ">
                     <div class="row" style="padding-top: 20px; padding-bottom: 20px">
                         <div class="col-6" align="center" >
                             <i class="fa fa-hourglass-half fa-4x" aria-hidden="true" style="color:darkorange"></i>
                         </div>
                         <div class="col-6" >
                             <div class="row">
                                 <div class="col-12">
                                     <h5 class="card-text"><strong>В ПРОЦЕССЕ</strong></h5>
                                 </div>
                                 <br>
                                 <div class="col-12" align="center">
                                     <h3 ><span class="badge badge-primary badge-pill">{{$count_projects_process}}</span></h3>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

     </div>
             <br>
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
                     <h5><span class="badge badge-primary badge-pill">{{$project->objectives()->count()}}</span></h5>
                     <form onsubmit="if(confirm('Удалить?')){return true} else{return false}"
                           action="{{route('project.destroy', $project->id)}}" method="post">
                         {{method_field('DELETE') }}
                         {{ csrf_field() }}

                         <a class="btn btn-primary btn-icon" href="{{route('project.edit', $project)}}">
                             <i class="fa fa-edit"></i>
                         </a>


                         <button type="submit" class="btn btn-danger btn-icon "  ><i class="fa fa-trash-o"></i></button>
                     </form>
                 </li>
             </ul>
             @endforeach
         </div>
         <div class="col-6">
             <a href="{{route('objective.create')}}" >
                 <button class="btn btn-outline-primary" style="a"><i class="fa fa-plus"></i> Создать задачу</button>
             </a>
             @foreach($objectives as $objective)
                 <ul class="list-group" style="padding-top: 10px">
                     <li class="list-group-item d-flex justify-content-between align-items-center">
                         <a class="" style="text-decoration: none; " href="{{route('objective.edit', $objective)}}">
                             <h4 class="list-group-item-heading">{{$objective->title}}</h4>
                         </a>
                         <h5 style="color:#318fdb">{{$objective->projects()->pluck('title')->implode(', ')}}</h5>

                     </li>
                 </ul>
             @endforeach
         </div>
     </div>
 </div>
 </div>
 </div>

 <div class="col-12" align="center">
     @include('footer.footer')
 </div>
@endsection
