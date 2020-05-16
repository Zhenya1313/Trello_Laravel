
    <div class="row">
        <div class="col-2">
            @include('menu.left')
        </div>

        <main role="main" class=" col- 10 col-md-10 ml-sm-auto col-lg-10 px-4"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
            <div class="py-5 text-center">
                <h2>Создание задачи <i class="fa fa-pencil" aria-hidden="true"></i></h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form class="needs-validation" novalidate="">
                            <h5 class="mb-3">Название</h5>
                            <div class="row">
                                <div class="col-md-12 ">
                                    <input type="text" class="form-control" name="title" value="{{ $objective->title ?? '' }}" placeholder="">
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
                                    <input type="date" name="date"  id="date" class="form-control" value="{{ $objective->date ?? '' }}">
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName">Время</label>
                                    <input class="form-control" type="time" name="time" id="time" value="{{ $objective->time ?? '' }}">
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
                            <div class="row">
                                <div class="col-6">
                                    <h5 class="mb-3">Присоединить к:</h5>
                                    <select name="projects[]" multiple="" class="form-control">
                                        @include('objective.objectives')
                                    </select>
                                    <div class="invalid-feedback">
                                        Valid last name is required.
                                    </div>
                                </div>
                                <div class="col-6">
                                    <h5 class="mb-3">Исполнитель(ли):</h5>
                                    <select name="users[]" multiple="" class="form-control">
                                        @include('objective.user_obj')
                                    </select>
                                    <div class="invalid-feedback">
                                        Valid last name is required.
                                    </div>
                                </div>
                            </div>
                            <hr class="mb-4">
                            <h5 class="mb-3">Описание</h5>
                            <div class="row">
                                <div class="col-md-12">
                                    <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
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
    </div>




