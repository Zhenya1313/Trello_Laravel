@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-2">
            @include('menu.left')
        </div>

        <main role="main" class="col-10 col-md-10 ml-sm-auto col-lg-10 px-4"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2"><i class="fa fa-thumb-tack" aria-hidden="true"></i> Задачи</h1>
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
                            <tr  align="center">
                                <th><span class="icon"><i class="fa fa-bookmark"></i></span> Название</th>
                                <th>Даты <span class="icon"><i class="fa fa-calendar"></i></span></th>
                                <th>Cтатус <span class="icon"><i class="fa fa-spinner"></i></span></th>
                                <th>Люди <span class="icon"><i class="fa fa-users"></i></span></th>
                                <th>Действия</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($objective as $objective)
                                <tr>
                                    <td style="vertical-align: middle"><a><h4>{{ $objective->title ?? '' }}</h4></a></td></td>
                                    <td align="center">
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
                                        {{--                                        <p><strong>Создатель:</strong><img src="/uploads/avatars/{{Auth::user()->avatar}}" style="width: 30px; height: 30px;   left:10px; border-radius:50%; "> {{ $objective->user_login ?? '' }}</p>--}}
                                        {{--                                        @foreach($objective->users as $user)--}}
                                        {{--                                        <p><strong>Исполнитель:</strong> {{ $user->email}}</p>--}}
                                        {{--                                            @endforeach--}}
                                        <details>
                                            <summary><strong>Cоздатель</strong></summary>
                                            <a><img src="/uploads/avatars/{{Auth::user()->avatar}}" style="width: 30px; height: 30px;   left:10px; border-radius:50%; "> {{ $objective->user_login ?? '' }}</a>
                                        </details>
                                        <details>
                                            <summary><strong>Исполнитель</strong></summary>
                                            @foreach($objective->users as $user)
                                                <a><img src="/uploads/avatars/{{$user->avatar}}" style="width: 30px; height: 30px;   left:10px; border-radius:50%; "> {{ $user->email}}</a>
                                            @endforeach
                                        </details>
                                    </td>
                                    <td style="vertical-align: middle">
                                        <form onsubmit="if(confirm('Удалить?')){return true} else{return false}"
                                              action="{{route('objective.destroy', $objective->id)}}" method="post">
                                            {{method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <a class="btn btn-default" href="{{route('objective.edit', $objective)}}">
                                                <i class="fa fa-edit " style="color: blue; vertical-align: middle"></i>
                                            </a>
                                            <button type="submit" class="btn"><i class="fa fa-trash-o " style="color: red; vertical-align: middle "></i></button>
                                        </form>

                                    </td>
                                    <td></td>
                                </tr>
                    @empty
                        <tr>
                            <td colspan="6">
                                <h1 class="text-center" style="color: royalblue">Задачи отсутствуют!</h1>
                            </td>
                        </tr>
                        @endforelse
                        </tbody>
                        <tfoot>
                        <tr >
                            <th><span class="icon"><i class="fa fa-bookmark"></i></span> Название</th>
                            <th>Даты <span class="icon"><i class="fa fa-calendar"></i></span></th>
                            <th>Cтатус <span class="icon"><i class="fa fa-spinner"></i></span></th>
                            <th>Люди <span class="icon"><i class="fa fa-users"></i></span></th>
                            <th>Действия</th>
                            <th></th>
                        </tr>
                        </tfoot>
                        </table>
                </div>
            </div>
    </div>
    </main>
    </div>

    <div class="col-12" align="center">
        @include('footer.footer')
    </div>
@endsection
