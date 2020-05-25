@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-2">
                @include('menu.left')
            </div>
            <div class="col-12 col-sm-12 col-md-10  col-lg-10 col-xl-10">
                <div align="center">
                   <h2>Если у вас возникли проблемы или есть пожелания по улучшению нашего веб-приложение,
                       оставьте пожалуйста свой отзыв!
                   </h2>
                    <br>
                    <a href="https://forms.gle/uvtwtYbQhvDdfsNf9"><button type="button" class="btn btn-outline-primary btn-lg">Оставить отзыв</button></a>
                </div>
            </div>
        </div>
        <div class="col-12" align="center">
            @include('footer.footer')
        </div>
    </div>
@endsection

