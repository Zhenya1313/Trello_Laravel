{{--<div class="container">--}}
{{--    <div class="row">--}}
{{--        <div class="col-md-4">--}}

{{--        </div>--}}
{{--        <div class="сol-12 col-sm-12 col-md-4">--}}
{{--            <div class="form-group">--}}
{{--                <div class="input-group mb-2 mr-sm-2">--}}
{{--                    <div class="input-group-prepend">--}}
{{--                        <div class="col-12 input-group-text">Название</div>--}}
{{--                    </div>--}}
{{--                    <input type="text" class="form-control" name="title" value="{{ $project->title ?? '' }}"--}}
{{--                    placeholder="">--}}
{{--                </div>--}}

{{--                <div class="input-group mb-2 mr-sm-2">--}}
{{--                <div class="input-group-prepend">--}}
{{--                    <div class="input-group-text">Выполнить до</div>--}}
{{--                </div>--}}
{{--                    <input type="date" name="date"  id="date" class="form-control" value="{{ $project->date ?? '' }}">--}}
{{--                </div>--}}

{{--                <div class="">--}}
{{--                    <input class="form-control" type="time" name="time" id="time" value="{{ $project->time ?? '' }}">--}}
{{--                </div>--}}

{{--                <select class="custom-select my-1 mr-sm-2" name="status" id="inlineFormCustomSelectPref" value="">--}}
{{--                    <option></option>--}}
{{--                    <option value="1" style="color: green">Выполнено</option>--}}
{{--                    <option value="2" style="color: orange">Выполняется</option>--}}
{{--                </select>--}}


{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <select name="parent_id" class="form-control">--}}
{{--                    <option value="0">-- без родительского проекта -- </option>--}}
{{--                    @include('project.projects')--}}
{{--                </select>--}}
{{--            </div>--}}


{{--            <hr>--}}
{{--            <div class="сol-12 col-sm-12 col-md-12">--}}
{{--                <button type="submit" class="btn btn-primary">Сохранить</button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-md-4">--}}

{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

<div class="row">
    <nav class="col-md-2  sidebar">
        <div class="sidebar-sticky">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="/admin">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        Главная <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/project">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                        Проект
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
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
        <div class="py-5 text-center">
            <h2>Создание проекта</h2>
        </div>
{{--        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">--}}
{{--            <h1 class="h2">Создание проекта</h1>--}}
{{--        </div>--}}
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form class="needs-validation" novalidate="">
                        <h5 class="mb-3">Название</h5>
                        <div class="row">
                            <div class="col-md-12 ">
                                <input type="text" class="form-control" name="title" value="{{ $project->title ?? '' }}" placeholder="">
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                            </div>
                        </div>
                        <hr class="mb-4">
                        <h5 class="mb-3">Выполнить до</h5>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="firstName">Дата</label>
                                <input type="date" name="date"  id="date" class="form-control" value="{{ $project->date ?? '' }}">
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName">Время</label>
                                <input class="form-control" type="time" name="time" id="time" value="{{ $project->time ?? '' }}">
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>
                        </div>
                        <hr class="mb-4">
                        <h5 class="mb-3">Статус</h5>
                        <div class="row">
                            <div class="col-md-12">
                                <select class="custom-select my-1 mr-sm-2" name="status" id="inlineFormCustomSelectPref" value="">
                                    <option></option>
                                    <option value="1" style="color: green">Выполнено</option>
                                    <option value="2" style="color: orange">Выполняется</option>
                                </select>
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                            </div>
                        </div>
                        <hr class="mb-4">
                        <h5 class="mb-3">Родительский проект</h5>
                        <div class="row">
                            <div class="col-md-12">
                                <select name="parent_id" class="form-control">
                                    <option value="0">-- без родительского проекта -- </option>
                                    @include('project.projects')
                                </select>
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>
                        </div>
                        <hr class="mb-4">
                        <button class="btn btn-outline-primary btn-lg btn-block" type="submit" >Сохранить</button>
                    </form>
                </div>
            </div>
        </div>

    </main>
</div>
