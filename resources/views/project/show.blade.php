@extends('layouts.app')

@section('content')

    <div class="container">
        <div>
            <a href="{{ route('objective.create') }}" class="btn btn-primary -pull-right">
                <i class="fa fa-plus"></i> Добавить задачу </a>
        </div>

        <br>
        {{--        <a href="{{ route('objective.create') }}" class="btn btn-primary">Создать</a>--}}
        <div class="row">
            <div class="col-lg-12">
                <table id="example" class="table table-striped " style="width:100%">
                    <thead>
                    <tr>
                        <th><span class="icon"><i class="fa fa-bookmark"></i></span> Название</th>
                        <th>Выполнить до <span class="icon"><i class="fa fa-calendar"></i></span></th>
                        <th>Cтатус <span class="icon"><i class="fa fa-spinner"></i></span></th>
                        <th>Age</th>
                        <th>Редактировать</th>
                        <th>Удалить</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($objective as $objective)

                        {{--                        заголовок категории--}}
                        <td>{{ $objective->title ?? '' }}</td>
                        <td>{{ $objective->title ?? '' }}</td>
                        <td>{{ $objective->title ?? '' }}</td>
                        <td>{{ $objective->title ?? '' }}</td>
                        <td align="center">
                            <a class="btn btn-default" href="{{route('objective.edit', $objective)}}">
                                <i class="fa fa-edit"></i>
                            </a>
                        </td>
                        <td align="center">
                            <form onsubmit="if(confirm('Удалить?')){return true} else{return false}"
                                  action="{{route('objective.destroy', $objective->id)}}" method="post">
                                {{method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn"><i class="fa fa-trash-o"></i></button>
                            </form>
                        </td>


                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">
                                <h1 class="text-center">Таски отсутствуют</h1>
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
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
    </div>

@endsection
