@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-2">
                @include('menu.left')
            </div>
            <div class="col-12 col-sm-12 col-md-10  col-lg-10 col-xl-10">
                    <div align="center">
                        <img class="mb-4" src="logo.png" alt="" width="92" height="92">
                    <p><h2><strong>Добро пожаловать в </strong><strong style="color: #318fdb">STeamWork </strong><strong>!</strong></h2></p>
                    </div>
                    <div>
                        <h4 style="text-indent: 20px;"><strong style="color: #318fdb;">STeamWork </strong>- отличный инструмент не только для собственного
                            планирования, но и обеспечения сотрудничества и общения внутри команды во время работы. </h4>
                        <h4 style="text-indent: 20px;">Это также отличный инструмент управления проектами в удалённом режиме работы команды. Вы можете
                            визуализировать поток задач в проекте, начиная от проектов разработки программного обеспечения
                            и заканчивая поездками в отпуск.</h4>
                    </div>
                <div class="row" >
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" style="padding-top: 14px; padding-right: 5px" align="center">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="free.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h3>Используй <strong style="color: #318fdb;">STeamWork </strong>абсолютно бесплатно!</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" style="padding-top: 14px; padding-right: 5px" align="center">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="statistic.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h3>В <strong style="color: #318fdb;">STeamWork </strong>ты можешь отслеживать статус выполнения проектов.</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" style="padding-top: 14px; padding-right: 5px" align="center">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="used.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h3>Комфортно используй <strong style="color: #318fdb;">STeamWork </strong>на любом устройстве.</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12" align="center">
            @include('footer.footer')
        </div>
    </div>
@endsection
