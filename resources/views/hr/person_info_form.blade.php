@extends('layouts.app')

@section('content')


    {{--        <div class="container-fluid">--}}
    <h1 class="page-title">
        <i class="voyager-person"></i> Информация о кадидате
    </h1>
    <div id="voyager-notifications"></div>

    <div class="page-content container-fluid">
        <div class="row">
            <div id="dbManager" class="col-md-12">


                @include("hr.person_info_form_top")

                @include("hr.person_info_form_invite")

                @include("hr.person_info_form_action")

                @include("hr.person_info_form_interview")

                @include("hr.person_info_form_buttom")

                <table class="table table-bordered" style="width: 100%;">
                    <thead>
                    <tr>

                        <th width="100%">Описание работы в текстовом виде:</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="newTableRow">

                        <td>
                            {{--                            <div class="col-md-7 form-group">--}}

                            {{--                                <textarea rows="7" cols="40" name="history" class="form-control">--}}
                            {{--                                    {{ $person->history ?? '' }}--}}
                            {{--                                </textarea>--}}
                            {{--                            </div>--}}
                        </td>

                        <td>
                            <div class="panel-footer"><input type="submit" value="Сохранить"
                                                             class="btn btn-primary pull-right">
                                <div style="clear: both;"></div>
                            </div>

                        </td>


                    </tr>
                    </tbody>
                </table>


            </div>
            <input type="hidden" name="table">
            {{ csrf_field() }}
            {{--                    <input type="hidden" name="_token"--}}
            {{--                                                              value="325CSuFjONbmIBlO6VZovErh3nQRflo1qpWktNC9">--}}
            </form>
        </div>
    </div>
    {{--    </div>--}}

    {{--                    <a href="http://simpatik/admin/roles/create" class="btn btn-success btn-add-new">--}}
    {{--                        <i class="voyager-plus"></i> <span>Добавить</span>--}}
    {{--                    </a>--}}
    {{--                    <a class="btn btn-danger" id="bulk_delete_btn"><i class="voyager-trash"></i> <span>Удалить выбранное</span></a>--}}


    <!-- /.modal -->
    {{--        </div>--}}

    {{--        <div class="page-content container-fluid">--}}
    {{--            <div class="alerts">--}}
    {{--            </div>--}}
    {{--            <div class="analytics-container">--}}

    {{--                <div class="col-md-12">--}}

    {{--                    <form action="http://simpatik/admin/bread/4" method="POST" role="form">--}}
    {{--                        <input type="hidden" value="4" name="id">--}}
    {{--                        <input type="hidden" name="_method" value="PUT">--}}
    {{--                        <!-- CSRF TOKEN -->--}}
    {{--                        <input type="hidden" name="_token" value="ujpQPL6AKM9LKEhH09nzqJZUqWTJAtcj5vkdjUbu">--}}

    {{--                        <div class="panel panel-primary panel-bordered">--}}

    {{--                            --}}{{--                                    <div class="panel-heading">--}}
    {{--                            --}}{{--                                        <h3 class="panel-title panel-icon"><i class="voyager-bread"></i> Categories BREAD информация</h3>--}}
    {{--                            --}}{{--                                        <div class="panel-actions">--}}
    {{--                            --}}{{--                                            <a class="panel-action voyager-angle-up" data-toggle="panel-collapse" aria-hidden="true"></a>--}}
    {{--                            --}}{{--                                        </div>--}}
    {{--                            --}}{{--                                    </div>--}}

    {{--                            <div class="panel-body">--}}
    {{--                                <div class="row clearfix">--}}
    {{--                                    <div class="col-md-6 form-group">--}}
    {{--                                        <label for="name">Код</label>--}}
    {{--                                        <input type="text" class="form-control" name="name" placeholder="" value="">--}}
    {{--                                    </div>--}}
    {{--                                    <div class="col-md-6 form-group">--}}
    {{--                                        <label for="name">Дата регистрации:</label>--}}
    {{--                                        <input type="text" class="form-control" readonly name="name" placeholder="" value="27.05.2019">--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <div class="row clearfix">--}}
    {{--                                    <div class="col-md-4 form-group">--}}
    {{--                                        <label for="display_name_singular">Фио</label>--}}
    {{--                                        <input type="text" class="form-control" name="display_name_singular" id="display_name_singular">--}}
    {{--                                    </div>--}}
    {{--                                    <div class="col-md-4 form-group">--}}
    {{--                                        <label for="display_name_singular"></label>--}}
    {{--                                        <input type="text" class="form-control" name="display_name_singular" id="display_name_singular">--}}
    {{--                                    </div>--}}
    {{--                                    <div class="col-md-4 form-group">--}}
    {{--                                        <label for="display_name_singular"></label>--}}
    {{--                                        <input type="text" class="form-control" name="display_name_singular" id="display_name_singular">--}}
    {{--                                    </div>--}}
    {{--                                    --}}{{--                                            <div class="col-md-6 form-group">--}}
    {{--                                    --}}{{--                                                <label for="display_name_plural">Отображаемое имя (во множественном числе)</label>--}}
    {{--                                    --}}{{--                                                <input type="text" class="form-control" name="display_name_plural" id="display_name_plural" placeholder="Отображаемое имя (во множественном числе)" value="Categories">--}}
    {{--                                    --}}{{--                                            </div>--}}
    {{--                                </div>--}}
    {{--                                <div class="row clearfix">--}}
    {{--                                    <div class="col-md-6 form-group">--}}
    {{--                                        <label for="slug">Кампейн региона</label>--}}
    {{--                                        <input type="text" class="form-control" readonly name="slug" placeholder="URL slug (например, posts)" value="Привлечение клиентов">--}}
    {{--                                    </div>--}}
    {{--                                    <div class="col-md-6 form-group">--}}
    {{--                                        <label for="icon">Статус клиента</label>--}}
    {{--                                        <select name="order_column" class="select2 form-control select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">--}}
    {{--                                            <option>..</option>--}}
    {{--                                            <option>Новый</option>--}}
    {{--                                            <option>Старый</option>--}}
    {{--                                        </select>--}}
    {{--                                        --}}{{--                                                <input type="text" class="form-control" name="icon" placeholder="" value="">--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <div class="row clearfix">--}}
    {{--                                    <div class="col-md-6 form-group">--}}
    {{--                                        <label for="model_name">Дата рождения</label>--}}
    {{--                                        <input type="date" class="form-control" name="date_start" placeholder="Дата рождения" value="2019-06-01">--}}
    {{--                                        --}}{{--                                                <span class="voyager-question" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="например \App\User, если оставить пустым - попытается использовать название таблицы"></span>--}}
    {{--                                        --}}{{--                                                <input type="text" class="form-control" name="model_name" placeholder="Название класса модели" value="TCG\Voyager\Models\Category">--}}
    {{--                                    </div>--}}
    {{--                                    <div class="col-md-6 form-group">--}}
    {{--                                        <label for="controller">Пол</label>--}}
    {{--                                        --}}{{--                                                <span class="voyager-question" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="например, пустой PageController,  будет использовать BREAD Controller"></span>--}}
    {{--                                        <select name="order_column" class="select2 form-control select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">--}}
    {{--                                            <option>..</option>--}}
    {{--                                            <option>Женский</option>--}}
    {{--                                            <option>Мужской</option>--}}
    {{--                                        </select>--}}
    {{--                                        --}}{{--                                                <input type="text" class="form-control" name="controller" placeholder="Имя контроллера" value="Женский">--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <div class="row clearfix">--}}
    {{--                                    <div class="col-md-6 form-group">--}}
    {{--                                        <label for="policy_name">Email</label>--}}
    {{--                                        --}}{{--                                                <span class="voyager-question" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="например \App\Policies\UserPolicy, если оставить пустым - попытается использовать политику по умолчанию"></span>--}}
    {{--                                        <input type="text" class="form-control" name="policy_name" placeholder="" value="" width="500">--}}
    {{--                                        <button class="btn btn-success">Подтвердить email</button>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="col-md-6 form-group">--}}
    {{--                                        <label for="policy_name">Индекс</label>--}}
    {{--                                        --}}{{--                                                <span class="voyager-question" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="например \App\Policies\UserPolicy, если оставить пустым - попытается использовать политику по умолчанию"></span>--}}
    {{--                                        <input type="text" class="form-control" name="policy_name" placeholder="54000" value="" >--}}
    {{--                                        <button class="btn btn-success">Проверить индекс</button>--}}
    {{--                                    </div>--}}

    {{--                                </div>--}}
    {{--                                --}}{{--                                        <div class="row clearfix">--}}
    {{--                                --}}{{--                                            <div class="col-md-3 form-group">--}}
    {{--                                --}}{{--                                                <label for="generate_permissions">Создание прав доступа</label><br>--}}
    {{--                                --}}{{--                                                <div class="toggle btn btn-primary" data-toggle="toggle" style="width: 72.7188px; height: 29px;"><input type="checkbox" name="generate_permissions" class="toggleswitch" data-on="Да" data-off="Нет" checked=""><div class="toggle-group"><label class="btn btn-primary toggle-on">Да</label><label class="btn btn-default active toggle-off">Нет</label><span class="toggle-handle btn btn-default"></span></div></div>--}}
    {{--                                --}}{{--                                            </div>--}}
    {{--                                --}}{{--                                            <div class="col-md-3 form-group">--}}
    {{--                                --}}{{--                                                <label for="server_side">Пагинация на стороне сервера</label><br>--}}
    {{--                                --}}{{--                                                <div class="toggle btn btn-default off" data-toggle="toggle" style="width: 72.7188px; height: 29px;"><input type="checkbox" name="server_side" class="toggleswitch" data-on="Да" data-off="Нет"><div class="toggle-group"><label class="btn btn-primary toggle-on">Да</label><label class="btn btn-default active toggle-off">Нет</label><span class="toggle-handle btn btn-default"></span></div></div>--}}
    {{--                                --}}{{--                                            </div>--}}
    {{--                                --}}{{--                                            <div class="col-md-3 form-group">--}}
    {{--                                --}}{{--                                                <label for="order_column">Столбец сортировки</label>--}}
    {{--                                --}}{{--                                                <span class="voyager-question" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Столбец, в котором хранится сортировка"></span>--}}
    {{--                                --}}{{--                                                <select name="order_column" class="select2 form-control select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">--}}
    {{--                                --}}{{--                                                    <option value="" data-select2-id="3">-- Отсутствует --</option>--}}
    {{--                                --}}{{--                                                    <option value="id">id</option>--}}
    {{--                                --}}{{--                                                    <option value="parent_id">parent_id</option>--}}
    {{--                                --}}{{--                                                    <option value="order">order</option>--}}
    {{--                                --}}{{--                                                    <option value="name">name</option>--}}
    {{--                                --}}{{--                                                    <option value="slug">slug</option>--}}
    {{--                                --}}{{--                                                    <option value="created_at">created_at</option>--}}
    {{--                                --}}{{--                                                    <option value="updated_at">updated_at</option>--}}
    {{--                                --}}{{--                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="2" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-order_column-2y-container"><span class="select2-selection__rendered" id="select2-order_column-2y-container" role="textbox" aria-readonly="true" title="-- Отсутствует --">-- Отсутствует --</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>--}}
    {{--                                --}}{{--                                            </div>--}}
    {{--                                --}}{{--                                            <div class="col-md-3 form-group">--}}
    {{--                                --}}{{--                                                <label for="order_display_column">Отображаемый столбец сортировки</label>--}}
    {{--                                --}}{{--                                                <span class="voyager-question" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Столбец, отображаемый на странице сортировки"></span>--}}
    {{--                                --}}{{--                                                <select name="order_display_column" class="select2 form-control select2-hidden-accessible" data-select2-id="4" tabindex="-1" aria-hidden="true">--}}
    {{--                                --}}{{--                                                    <option value="" data-select2-id="6">-- Отсутствует --</option>--}}
    {{--                                --}}{{--                                                    <option value="id">id</option>--}}
    {{--                                --}}{{--                                                    <option value="parent_id">parent_id</option>--}}
    {{--                                --}}{{--                                                    <option value="order">order</option>--}}
    {{--                                --}}{{--                                                    <option value="name">name</option>--}}
    {{--                                --}}{{--                                                    <option value="slug">slug</option>--}}
    {{--                                --}}{{--                                                    <option value="created_at">created_at</option>--}}
    {{--                                --}}{{--                                                    <option value="updated_at">updated_at</option>--}}
    {{--                                --}}{{--                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="5" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-order_display_column-7i-container"><span class="select2-selection__rendered" id="select2-order_display_column-7i-container" role="textbox" aria-readonly="true" title="-- Отсутствует --">-- Отсутствует --</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>--}}
    {{--                                --}}{{--                                            </div>--}}
    {{--                                --}}{{--                                            <div class="col-md-3 form-group">--}}
    {{--                                --}}{{--                                                <label for="order_direction">Направление сортировки</label>--}}
    {{--                                --}}{{--                                                <select name="order_direction" class="select2 form-control select2-hidden-accessible" data-select2-id="7" tabindex="-1" aria-hidden="true">--}}
    {{--                                --}}{{--                                                    <option value="asc">--}}
    {{--                                --}}{{--                                                        По возрастанию--}}
    {{--                                --}}{{--                                                    </option>--}}
    {{--                                --}}{{--                                                    <option value="desc" selected="" data-select2-id="9">--}}
    {{--                                --}}{{--                                                        По убыванию--}}
    {{--                                --}}{{--                                                    </option>--}}
    {{--                                --}}{{--                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="8" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-order_direction-qr-container"><span class="select2-selection__rendered" id="select2-order_direction-qr-container" role="textbox" aria-readonly="true" title="--}}
    {{--                                --}}{{--                                            По убыванию--}}
    {{--                                --}}{{--                                        ">--}}
    {{--                                --}}{{--                                            По убыванию--}}
    {{--                                --}}{{--                                        </span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>--}}
    {{--                                --}}{{--                                            </div>--}}
    {{--                                --}}{{--                                            <div class="col-md-3 form-group">--}}
    {{--                                --}}{{--                                                <label for="default_search_key">Поле server-side поиска по умолчанию</label>--}}
    {{--                                --}}{{--                                                <span class="voyager-question" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Это поле будет изначально выбрано для поиска на стороне сервера"></span>--}}
    {{--                                --}}{{--                                                <select name="default_search_key" class="select2 form-control select2-hidden-accessible" data-select2-id="10" tabindex="-1" aria-hidden="true">--}}
    {{--                                --}}{{--                                                    <option value="" data-select2-id="12">-- Отсутствует --</option>--}}
    {{--                                --}}{{--                                                    <option value="id">id</option>--}}
    {{--                                --}}{{--                                                    <option value="parent_id">parent_id</option>--}}
    {{--                                --}}{{--                                                    <option value="order">order</option>--}}
    {{--                                --}}{{--                                                    <option value="name">name</option>--}}
    {{--                                --}}{{--                                                    <option value="slug">slug</option>--}}
    {{--                                --}}{{--                                                    <option value="created_at">created_at</option>--}}
    {{--                                --}}{{--                                                    <option value="updated_at">updated_at</option>--}}
    {{--                                --}}{{--                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="11" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-default_search_key-xa-container"><span class="select2-selection__rendered" id="select2-default_search_key-xa-container" role="textbox" aria-readonly="true" title="-- Отсутствует --">-- Отсутствует --</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>--}}
    {{--                                --}}{{--                                            </div>--}}
    {{--                                --}}{{--                                        </div>--}}
    {{--                                --}}{{--                                        <div class="row clearfix">--}}
    {{--                                --}}{{--                                            <div class="col-md-3 form-group">--}}
    {{--                                --}}{{--                                                <label for="scope">Scope</label>--}}
    {{--                                --}}{{--                                                <select name="scope" class="select2 form-control select2-hidden-accessible" data-select2-id="13" tabindex="-1" aria-hidden="true">--}}
    {{--                                --}}{{--                                                    <option value="" data-select2-id="15">-- Отсутствует --</option>--}}
    {{--                                --}}{{--                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="14" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-scope-hj-container"><span class="select2-selection__rendered" id="select2-scope-hj-container" role="textbox" aria-readonly="true" title="-- Отсутствует --">-- Отсутствует --</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>--}}
    {{--                                --}}{{--                                            </div>--}}
    {{--                                --}}{{--                                            <div class="col-md-9 form-group">--}}
    {{--                                --}}{{--                                                <label for="description">Описание</label>--}}
    {{--                                --}}{{--                                                <textarea class="form-control" name="description" placeholder="Описание"></textarea>--}}
    {{--                                --}}{{--                                            </div>--}}
    {{--                                --}}{{--                                        </div>--}}
    {{--                            </div><!-- .panel-body -->--}}
    {{--                        </div><!-- .panel -->--}}


    {{--                    --}}{{--                                <div class="panel panel-primary panel-bordered">--}}
    {{--                    --}}{{--                                    <div class="panel-heading">--}}
    {{--                    --}}{{--                                        <h3 class="panel-title panel-icon"><i class="voyager-window-list"></i> Редактировать строки таблицы categories ниже:</h3>--}}
    {{--                    --}}{{--                                        <div class="panel-actions">--}}
    {{--                    --}}{{--                                            <a class="panel-action voyager-angle-up" data-toggle="panel-collapse" aria-hidden="true"></a>--}}
    {{--                    --}}{{--                                        </div>--}}
    {{--                    --}}{{--                                    </div>--}}

    {{--                    --}}{{--                                    <div class="panel-body">--}}
    {{--                    --}}{{--                                        <div class="row fake-table-hd">--}}
    {{--                    --}}{{--                                            <div class="col-xs-2">Поле</div>--}}
    {{--                    --}}{{--                                            <div class="col-xs-2">Видимость</div>--}}
    {{--                    --}}{{--                                            <div class="col-xs-2">Тип ввода</div>--}}
    {{--                    --}}{{--                                            <div class="col-xs-2">Отображаемое имя</div>--}}
    {{--                    --}}{{--                                            <div class="col-xs-4">Дополнительные сведения</div>--}}
    {{--                    --}}{{--                                        </div>--}}

    {{--                    --}}{{--                                        <div id="bread-items" class="ui-sortable">--}}












































    {{--                    --}}{{--                                            <div class="row row-dd">--}}
    {{--                    --}}{{--                                                <div class="col-xs-2">--}}
    {{--                    --}}{{--                                                    <h4><strong>id</strong></h4>--}}
    {{--                    --}}{{--                                                    <strong>Тип:</strong> <span>integer</span><br>--}}
    {{--                    --}}{{--                                                    <strong>Ключ:</strong> <span>PRI</span><br>--}}
    {{--                    --}}{{--                                                    <strong>Обязательный:</strong>--}}
    {{--                    --}}{{--                                                    <span>Да</span>--}}
    {{--                    --}}{{--                                                    <input type="hidden" value="1" name="field_required_id" checked="checked">--}}
    {{--                    --}}{{--                                                    <div class="handler voyager-handle ui-sortable-handle"></div>--}}
    {{--                    --}}{{--                                                    <input class="row_order" type="hidden" value="1" name="field_order_id">--}}
    {{--                    --}}{{--                                                </div>--}}
    {{--                    --}}{{--                                                <div class="col-xs-2">--}}
    {{--                    --}}{{--                                                    <input type="checkbox" id="field_browse_id" name="field_browse_id">--}}
    {{--                    --}}{{--                                                    <label for="field_browse_id">Просмотр</label><br>--}}
    {{--                    --}}{{--                                                    <input type="checkbox" id="field_read_id" name="field_read_id">--}}
    {{--                    --}}{{--                                                    <label for="field_read_id">Считывание</label><br>--}}
    {{--                    --}}{{--                                                    <input type="checkbox" id="field_edit_id" name="field_edit_id">--}}
    {{--                    --}}{{--                                                    <label for="field_edit_id">Изменить</label><br>--}}
    {{--                    --}}{{--                                                    <input type="checkbox" id="field_add_id" name="field_add_id">--}}
    {{--                    --}}{{--                                                    <label for="field_add_id">Добавить</label><br>--}}
    {{--                    --}}{{--                                                    <input type="checkbox" id="field_delete_id" name="field_delete_id">--}}
    {{--                    --}}{{--                                                    <label for="field_delete_id">Удалить</label><br>--}}
    {{--                    --}}{{--                                                </div>--}}
    {{--                    --}}{{--                                                <div class="col-xs-2">--}}
    {{--                    --}}{{--                                                    <input type="hidden" name="field_id" value="id">--}}
    {{--                    --}}{{--                                                    <select name="field_input_type_id">--}}
    {{--                    --}}{{--                                                        <option value="checkbox">--}}
    {{--                    --}}{{--                                                            Checkbox--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="multiple_checkbox">--}}
    {{--                    --}}{{--                                                            Multiple Checkbox--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="color">--}}
    {{--                    --}}{{--                                                            Color--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="date">--}}
    {{--                    --}}{{--                                                            Date--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="file">--}}
    {{--                    --}}{{--                                                            File--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="image">--}}
    {{--                    --}}{{--                                                            Image--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="multiple_images">--}}
    {{--                    --}}{{--                                                            Multiple Images--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="media_picker">--}}
    {{--                    --}}{{--                                                            Media Picker--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="number" selected="">--}}
    {{--                    --}}{{--                                                            Number--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="password">--}}
    {{--                    --}}{{--                                                            Password--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="radio_btn">--}}
    {{--                    --}}{{--                                                            Radio Button--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="rich_text_box">--}}
    {{--                    --}}{{--                                                            Rich Text Box--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="code_editor">--}}
    {{--                    --}}{{--                                                            Code Editor--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="markdown_editor">--}}
    {{--                    --}}{{--                                                            Markdown Editor--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="select_dropdown">--}}
    {{--                    --}}{{--                                                            Select Dropdown--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="select_multiple">--}}
    {{--                    --}}{{--                                                            Select Multiple--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="text">--}}
    {{--                    --}}{{--                                                            Text--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="text_area">--}}
    {{--                    --}}{{--                                                            Text Area--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="time">--}}
    {{--                    --}}{{--                                                            Time--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="timestamp">--}}
    {{--                    --}}{{--                                                            Timestamp--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="hidden">--}}
    {{--                    --}}{{--                                                            Hidden--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="coordinates">--}}
    {{--                    --}}{{--                                                            Coordinates--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                    </select>--}}
    {{--                    --}}{{--                                                </div>--}}
    {{--                    --}}{{--                                                <div class="col-xs-2">--}}
    {{--                    --}}{{--                                                    <input type="text" class="form-control" value="ID" name="field_display_name_id">--}}
    {{--                    --}}{{--                                                </div>--}}
    {{--                    --}}{{--                                                <div class="col-xs-4">--}}
    {{--                    --}}{{--                                                    <div class="alert alert-danger validation-error" style="display: none;">--}}
    {{--                    --}}{{--                                                        неверный формат JSON--}}
    {{--                    --}}{{--                                                    </div>--}}
    {{--                    --}}{{--                                                    <div class=" ace_editor ace-github" style="height: 48px;"><div style="position: absolute;"></div><textarea class="ace_text-input" wrap="off" autocorrect="off" autocapitalize="off" spellcheck="false" style="opacity: 0; height: 12px; width: 6.00031px; left: 37px; top: 0px;"></textarea><div class="ace_gutter"><div class="ace_layer ace_gutter-layer ace_folding-enabled" style="margin-top: 0px; height: 72px; width: 33px;"><div class="ace_gutter-cell " style="height: 12px;"></div></div><div class="ace_gutter-active-line" style="top: 0px; height: 12px;"></div></div><div class="ace_scroller" style="left: 33px; right: 0px; bottom: 0px;"><div class="ace_content" style="margin-top: 0px; width: 343px; height: 72px; margin-left: 0px;"><div class="ace_layer ace_print-margin-layer"><div class="ace_print-margin" style="left: 484.025px; visibility: visible;"></div></div><div class="ace_layer ace_marker-layer"><div class="ace_active-line" style="height:12px;top:0px;left:0;right:0;"></div></div><div class="ace_layer ace_text-layer" style="padding: 0px 4px;"><div class="ace_line" style="height:12px"><span class="ace_paren ace_lparen">{</span><span class="ace_paren ace_rparen">}</span></div></div><div class="ace_layer ace_marker-layer"></div><div class="ace_layer ace_cursor-layer ace_hidden-cursors"><div class="ace_cursor" style="left: 4px; top: 0px; width: 6.00031px; height: 12px;"></div></div></div></div><div class="ace_scrollbar ace_scrollbar-v" style="display: none; width: 20px; bottom: 0px;"><div class="ace_scrollbar-inner" style="width: 20px; height: 12px;"></div></div><div class="ace_scrollbar ace_scrollbar-h" style="display: none; height: 20px; left: 33px; right: 0px;"><div class="ace_scrollbar-inner" style="height: 20px; width: 376px;"></div></div><div style="height: auto; width: auto; top: 0px; left: 0px; visibility: hidden; position: absolute; white-space: pre; font: inherit; overflow: hidden;"><div style="height: auto; width: auto; top: 0px; left: 0px; visibility: hidden; position: absolute; white-space: pre; font: inherit; overflow: visible;"></div><div style="height: auto; width: auto; top: 0px; left: 0px; visibility: hidden; position: absolute; white-space: pre; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; overflow: visible;">XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</div></div></div><textarea id="json-input-&quot;id&quot;" class="resizable-editor" data-editor="json" name="field_details_id" style="display: none;">                                            {}--}}
    {{--                    --}}{{--                                        </textarea>--}}
    {{--                    --}}{{--                                                </div>--}}
    {{--                    --}}{{--                                            </div><div class="row row-dd">--}}
    {{--                    --}}{{--                                                <div class="col-xs-2">--}}
    {{--                    --}}{{--                                                    <h4><strong>parent_id</strong></h4>--}}
    {{--                    --}}{{--                                                    <strong>Тип:</strong> <span>integer</span><br>--}}
    {{--                    --}}{{--                                                    <strong>Ключ:</strong> <span>IND</span><br>--}}
    {{--                    --}}{{--                                                    <strong>Обязательный:</strong>--}}
    {{--                    --}}{{--                                                    <span>Нет</span>--}}
    {{--                    --}}{{--                                                    <input type="hidden" value="0" name="field_required_parent_id">--}}
    {{--                    --}}{{--                                                    <div class="handler voyager-handle ui-sortable-handle"></div>--}}
    {{--                    --}}{{--                                                    <input class="row_order" type="hidden" value="2" name="field_order_parent_id">--}}
    {{--                    --}}{{--                                                </div>--}}
    {{--                    --}}{{--                                                <div class="col-xs-2">--}}
    {{--                    --}}{{--                                                    <input type="checkbox" id="field_browse_parent_id" name="field_browse_parent_id">--}}
    {{--                    --}}{{--                                                    <label for="field_browse_parent_id">Просмотр</label><br>--}}
    {{--                    --}}{{--                                                    <input type="checkbox" id="field_read_parent_id" name="field_read_parent_id" checked="checked">--}}
    {{--                    --}}{{--                                                    <label for="field_read_parent_id">Считывание</label><br>--}}
    {{--                    --}}{{--                                                    <input type="checkbox" id="field_edit_parent_id" name="field_edit_parent_id" checked="checked">--}}
    {{--                    --}}{{--                                                    <label for="field_edit_parent_id">Изменить</label><br>--}}
    {{--                    --}}{{--                                                    <input type="checkbox" id="field_add_parent_id" name="field_add_parent_id" checked="checked">--}}
    {{--                    --}}{{--                                                    <label for="field_add_parent_id">Добавить</label><br>--}}
    {{--                    --}}{{--                                                    <input type="checkbox" id="field_delete_parent_id" name="field_delete_parent_id" checked="checked">--}}
    {{--                    --}}{{--                                                    <label for="field_delete_parent_id">Удалить</label><br>--}}
    {{--                    --}}{{--                                                </div>--}}
    {{--                    --}}{{--                                                <div class="col-xs-2">--}}
    {{--                    --}}{{--                                                    <input type="hidden" name="field_parent_id" value="parent_id">--}}
    {{--                    --}}{{--                                                    <select name="field_input_type_parent_id">--}}
    {{--                    --}}{{--                                                        <option value="checkbox">--}}
    {{--                    --}}{{--                                                            Checkbox--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="multiple_checkbox">--}}
    {{--                    --}}{{--                                                            Multiple Checkbox--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="color">--}}
    {{--                    --}}{{--                                                            Color--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="date">--}}
    {{--                    --}}{{--                                                            Date--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="file">--}}
    {{--                    --}}{{--                                                            File--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="image">--}}
    {{--                    --}}{{--                                                            Image--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="multiple_images">--}}
    {{--                    --}}{{--                                                            Multiple Images--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="media_picker">--}}
    {{--                    --}}{{--                                                            Media Picker--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="number">--}}
    {{--                    --}}{{--                                                            Number--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="password">--}}
    {{--                    --}}{{--                                                            Password--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="radio_btn">--}}
    {{--                    --}}{{--                                                            Radio Button--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="rich_text_box">--}}
    {{--                    --}}{{--                                                            Rich Text Box--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="code_editor">--}}
    {{--                    --}}{{--                                                            Code Editor--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="markdown_editor">--}}
    {{--                    --}}{{--                                                            Markdown Editor--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="select_dropdown" selected="">--}}
    {{--                    --}}{{--                                                            Select Dropdown--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="select_multiple">--}}
    {{--                    --}}{{--                                                            Select Multiple--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="text">--}}
    {{--                    --}}{{--                                                            Text--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="text_area">--}}
    {{--                    --}}{{--                                                            Text Area--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="time">--}}
    {{--                    --}}{{--                                                            Time--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="timestamp">--}}
    {{--                    --}}{{--                                                            Timestamp--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="hidden">--}}
    {{--                    --}}{{--                                                            Hidden--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="coordinates">--}}
    {{--                    --}}{{--                                                            Coordinates--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                    </select>--}}
    {{--                    --}}{{--                                                </div>--}}
    {{--                    --}}{{--                                                <div class="col-xs-2">--}}
    {{--                    --}}{{--                                                    <input type="text" class="form-control" value="Parent" name="field_display_name_parent_id">--}}
    {{--                    --}}{{--                                                </div>--}}
    {{--                    --}}{{--                                                <div class="col-xs-4">--}}
    {{--                    --}}{{--                                                    <div class="alert alert-danger validation-error" style="display: none;">--}}
    {{--                    --}}{{--                                                        неверный формат JSON--}}
    {{--                    --}}{{--                                                    </div>--}}
    {{--                    --}}{{--                                                    <div class=" ace_editor ace-github" style="height: 132px;"><div style="position: absolute;"></div><textarea class="ace_text-input" wrap="off" autocorrect="off" autocapitalize="off" spellcheck="false" style="opacity: 0; height: 12px; width: 6.00031px; left: 37px; top: 0px;"></textarea><div class="ace_gutter"><div class="ace_layer ace_gutter-layer ace_folding-enabled" style="margin-top: 0px; height: 156px; width: 33px;"><div class="ace_gutter-cell " style="height: 12px;"><span class="ace_fold-widget ace_start ace_open" style="height: 12px;"></span></div><div class="ace_gutter-cell " style="height: 12px;"></div><div class="ace_gutter-cell " style="height: 12px;"></div><div class="ace_gutter-cell " style="height: 12px;"><span class="ace_fold-widget ace_start ace_open" style="height: 12px;"></span></div><div class="ace_gutter-cell " style="height: 12px;"></div><div class="ace_gutter-cell " style="height: 12px;"></div><div class="ace_gutter-cell " style="height: 12px;"><span class="ace_fold-widget ace_start ace_open" style="height: 12px;"></span></div><div class="ace_gutter-cell " style="height: 12px;"></div><div class="ace_gutter-cell " style="height: 12px;"></div><div class="ace_gutter-cell " style="height: 12px;"></div><div class="ace_gutter-cell " style="height: 12px;"></div></div><div class="ace_gutter-active-line" style="top: 0px; height: 12px;"></div></div><div class="ace_scroller" style="left: 33px; right: 0px; bottom: 0px;"><div class="ace_content" style="margin-top: 0px; width: 343px; height: 156px; margin-left: 0px;"><div class="ace_layer ace_print-margin-layer"><div class="ace_print-margin" style="left: 484.025px; visibility: visible;"></div></div><div class="ace_layer ace_marker-layer"><div class="ace_active-line" style="height:12px;top:0px;left:0;right:0;"></div></div><div class="ace_layer ace_text-layer" style="padding: 0px 4px;"><div class="ace_line" style="height:12px"><span class="ace_paren ace_lparen">{</span></div><div class="ace_line" style="height:12px">    <span class="ace_variable">"default"</span>: <span class="ace_string">""</span>,</div><div class="ace_line" style="height:12px">    <span class="ace_variable">"null"</span>: <span class="ace_string">""</span>,</div><div class="ace_line" style="height:12px">    <span class="ace_variable">"options"</span>: <span class="ace_paren ace_lparen">{</span></div><div class="ace_line" style="height:12px"><span class="ace_indent-guide">    </span>    <span class="ace_variable">""</span>: <span class="ace_string">"-- None --"</span></div><div class="ace_line" style="height:12px">    <span class="ace_paren ace_rparen">}</span>,</div><div class="ace_line" style="height:12px">    <span class="ace_variable">"relationship"</span>: <span class="ace_paren ace_lparen">{</span></div><div class="ace_line" style="height:12px"><span class="ace_indent-guide">    </span>    <span class="ace_variable">"key"</span>: <span class="ace_string">"id"</span>,</div><div class="ace_line" style="height:12px"><span class="ace_indent-guide">    </span>    <span class="ace_variable">"label"</span>: <span class="ace_string">"name"</span></div><div class="ace_line" style="height:12px">    <span class="ace_paren ace_rparen">}</span></div><div class="ace_line" style="height:12px"><span class="ace_paren ace_rparen">}</span></div></div><div class="ace_layer ace_marker-layer"></div><div class="ace_layer ace_cursor-layer ace_hidden-cursors"><div class="ace_cursor" style="left: 4px; top: 0px; width: 6.00031px; height: 12px;"></div></div></div></div><div class="ace_scrollbar ace_scrollbar-v" style="display: none; width: 20px; bottom: 0px;"><div class="ace_scrollbar-inner" style="width: 20px; height: 132px;"></div></div><div class="ace_scrollbar ace_scrollbar-h" style="display: none; height: 20px; left: 33px; right: 0px;"><div class="ace_scrollbar-inner" style="height: 20px; width: 376px;"></div></div><div style="height: auto; width: auto; top: 0px; left: 0px; visibility: hidden; position: absolute; white-space: pre; font: inherit; overflow: hidden;"><div style="height: auto; width: auto; top: 0px; left: 0px; visibility: hidden; position: absolute; white-space: pre; font: inherit; overflow: visible;"></div><div style="height: auto; width: auto; top: 0px; left: 0px; visibility: hidden; position: absolute; white-space: pre; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; overflow: visible;">XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</div></div></div><textarea id="json-input-&quot;parent_id&quot;" class="resizable-editor" data-editor="json" name="field_details_parent_id" style="display: none;">                                            {"default":"","null":"","options":{"":"-- None --"},"relationship":{"key":"id","label":"name"}}--}}
    {{--                    --}}{{--                                        </textarea>--}}
    {{--                    --}}{{--                                                </div>--}}
    {{--                    --}}{{--                                            </div><div class="row row-dd">--}}
    {{--                    --}}{{--                                                <div class="col-xs-2">--}}
    {{--                    --}}{{--                                                    <h4><strong>order</strong></h4>--}}
    {{--                    --}}{{--                                                    <strong>Тип:</strong> <span>integer</span><br>--}}
    {{--                    --}}{{--                                                    <strong>Ключ:</strong> <span></span><br>--}}
    {{--                    --}}{{--                                                    <strong>Обязательный:</strong>--}}
    {{--                    --}}{{--                                                    <span>Да</span>--}}
    {{--                    --}}{{--                                                    <input type="hidden" value="1" name="field_required_order" checked="checked">--}}
    {{--                    --}}{{--                                                    <div class="handler voyager-handle ui-sortable-handle"></div>--}}
    {{--                    --}}{{--                                                    <input class="row_order" type="hidden" value="3" name="field_order_order">--}}
    {{--                    --}}{{--                                                </div>--}}
    {{--                    --}}{{--                                                <div class="col-xs-2">--}}
    {{--                    --}}{{--                                                    <input type="checkbox" id="field_browse_order" name="field_browse_order" checked="checked">--}}
    {{--                    --}}{{--                                                    <label for="field_browse_order">Просмотр</label><br>--}}
    {{--                    --}}{{--                                                    <input type="checkbox" id="field_read_order" name="field_read_order" checked="checked">--}}
    {{--                    --}}{{--                                                    <label for="field_read_order">Считывание</label><br>--}}
    {{--                    --}}{{--                                                    <input type="checkbox" id="field_edit_order" name="field_edit_order" checked="checked">--}}
    {{--                    --}}{{--                                                    <label for="field_edit_order">Изменить</label><br>--}}
    {{--                    --}}{{--                                                    <input type="checkbox" id="field_add_order" name="field_add_order" checked="checked">--}}
    {{--                    --}}{{--                                                    <label for="field_add_order">Добавить</label><br>--}}
    {{--                    --}}{{--                                                    <input type="checkbox" id="field_delete_order" name="field_delete_order" checked="checked">--}}
    {{--                    --}}{{--                                                    <label for="field_delete_order">Удалить</label><br>--}}
    {{--                    --}}{{--                                                </div>--}}
    {{--                    --}}{{--                                                <div class="col-xs-2">--}}
    {{--                    --}}{{--                                                    <input type="hidden" name="field_order" value="order">--}}
    {{--                    --}}{{--                                                    <select name="field_input_type_order">--}}
    {{--                    --}}{{--                                                        <option value="checkbox">--}}
    {{--                    --}}{{--                                                            Checkbox--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="multiple_checkbox">--}}
    {{--                    --}}{{--                                                            Multiple Checkbox--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="color">--}}
    {{--                    --}}{{--                                                            Color--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="date">--}}
    {{--                    --}}{{--                                                            Date--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="file">--}}
    {{--                    --}}{{--                                                            File--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="image">--}}
    {{--                    --}}{{--                                                            Image--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="multiple_images">--}}
    {{--                    --}}{{--                                                            Multiple Images--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="media_picker">--}}
    {{--                    --}}{{--                                                            Media Picker--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="number">--}}
    {{--                    --}}{{--                                                            Number--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="password">--}}
    {{--                    --}}{{--                                                            Password--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="radio_btn">--}}
    {{--                    --}}{{--                                                            Radio Button--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="rich_text_box">--}}
    {{--                    --}}{{--                                                            Rich Text Box--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="code_editor">--}}
    {{--                    --}}{{--                                                            Code Editor--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="markdown_editor">--}}
    {{--                    --}}{{--                                                            Markdown Editor--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="select_dropdown">--}}
    {{--                    --}}{{--                                                            Select Dropdown--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="select_multiple">--}}
    {{--                    --}}{{--                                                            Select Multiple--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="text" selected="">--}}
    {{--                    --}}{{--                                                            Text--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="text_area">--}}
    {{--                    --}}{{--                                                            Text Area--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="time">--}}
    {{--                    --}}{{--                                                            Time--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="timestamp">--}}
    {{--                    --}}{{--                                                            Timestamp--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="hidden">--}}
    {{--                    --}}{{--                                                            Hidden--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="coordinates">--}}
    {{--                    --}}{{--                                                            Coordinates--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                    </select>--}}
    {{--                    --}}{{--                                                </div>--}}
    {{--                    --}}{{--                                                <div class="col-xs-2">--}}
    {{--                    --}}{{--                                                    <input type="text" class="form-control" value="Order" name="field_display_name_order">--}}
    {{--                    --}}{{--                                                </div>--}}
    {{--                    --}}{{--                                                <div class="col-xs-4">--}}
    {{--                    --}}{{--                                                    <div class="alert alert-danger validation-error" style="display: none;">--}}
    {{--                    --}}{{--                                                        неверный формат JSON--}}
    {{--                    --}}{{--                                                    </div>--}}
    {{--                    --}}{{--                                                    <div class=" ace_editor ace-github" style="height: 48px;"><div style="position: absolute;"></div><textarea class="ace_text-input" wrap="off" autocorrect="off" autocapitalize="off" spellcheck="false" style="opacity: 0; height: 12px; width: 6.00031px; left: 37px; top: 0px;"></textarea><div class="ace_gutter"><div class="ace_layer ace_gutter-layer ace_folding-enabled" style="margin-top: 0px; height: 72px; width: 33px;"><div class="ace_gutter-cell " style="height: 12px;"><span class="ace_fold-widget ace_start ace_open" style="height: 12px;"></span></div><div class="ace_gutter-cell " style="height: 12px;"></div><div class="ace_gutter-cell " style="height: 12px;"></div></div><div class="ace_gutter-active-line" style="top: 0px; height: 12px;"></div></div><div class="ace_scroller" style="left: 33px; right: 0px; bottom: 0px;"><div class="ace_content" style="margin-top: 0px; width: 343px; height: 72px; margin-left: 0px;"><div class="ace_layer ace_print-margin-layer"><div class="ace_print-margin" style="left: 484.025px; visibility: visible;"></div></div><div class="ace_layer ace_marker-layer"><div class="ace_active-line" style="height:12px;top:0px;left:0;right:0;"></div></div><div class="ace_layer ace_text-layer" style="padding: 0px 4px;"><div class="ace_line" style="height:12px"><span class="ace_paren ace_lparen">{</span></div><div class="ace_line" style="height:12px">    <span class="ace_variable">"default"</span>: <span class="ace_constant ace_numeric">1</span></div><div class="ace_line" style="height:12px"><span class="ace_paren ace_rparen">}</span></div></div><div class="ace_layer ace_marker-layer"></div><div class="ace_layer ace_cursor-layer ace_hidden-cursors"><div class="ace_cursor" style="left: 4px; top: 0px; width: 6.00031px; height: 12px;"></div></div></div></div><div class="ace_scrollbar ace_scrollbar-v" style="display: none; width: 20px; bottom: 0px;"><div class="ace_scrollbar-inner" style="width: 20px; height: 36px;"></div></div><div class="ace_scrollbar ace_scrollbar-h" style="display: none; height: 20px; left: 33px; right: 0px;"><div class="ace_scrollbar-inner" style="height: 20px; width: 376px;"></div></div><div style="height: auto; width: auto; top: 0px; left: 0px; visibility: hidden; position: absolute; white-space: pre; font: inherit; overflow: hidden;"><div style="height: auto; width: auto; top: 0px; left: 0px; visibility: hidden; position: absolute; white-space: pre; font: inherit; overflow: visible;"></div><div style="height: auto; width: auto; top: 0px; left: 0px; visibility: hidden; position: absolute; white-space: pre; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; overflow: visible;">XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</div></div></div><textarea id="json-input-&quot;order&quot;" class="resizable-editor" data-editor="json" name="field_details_order" style="display: none;">                                            {"default":1}--}}
    {{--                    --}}{{--                                        </textarea>--}}
    {{--                    --}}{{--                                                </div>--}}
    {{--                    --}}{{--                                            </div><div class="row row-dd">--}}
    {{--                    --}}{{--                                                <div class="col-xs-2">--}}
    {{--                    --}}{{--                                                    <h4><strong>name</strong></h4>--}}
    {{--                    --}}{{--                                                    <strong>Тип:</strong> <span>varchar</span><br>--}}
    {{--                    --}}{{--                                                    <strong>Ключ:</strong> <span></span><br>--}}
    {{--                    --}}{{--                                                    <strong>Обязательный:</strong>--}}
    {{--                    --}}{{--                                                    <span>Да</span>--}}
    {{--                    --}}{{--                                                    <input type="hidden" value="1" name="field_required_name" checked="checked">--}}
    {{--                    --}}{{--                                                    <div class="handler voyager-handle ui-sortable-handle"></div>--}}
    {{--                    --}}{{--                                                    <input class="row_order" type="hidden" value="4" name="field_order_name">--}}
    {{--                    --}}{{--                                                </div>--}}
    {{--                    --}}{{--                                                <div class="col-xs-2">--}}
    {{--                    --}}{{--                                                    <input type="checkbox" id="field_browse_name" name="field_browse_name" checked="checked">--}}
    {{--                    --}}{{--                                                    <label for="field_browse_name">Просмотр</label><br>--}}
    {{--                    --}}{{--                                                    <input type="checkbox" id="field_read_name" name="field_read_name" checked="checked">--}}
    {{--                    --}}{{--                                                    <label for="field_read_name">Считывание</label><br>--}}
    {{--                    --}}{{--                                                    <input type="checkbox" id="field_edit_name" name="field_edit_name" checked="checked">--}}
    {{--                    --}}{{--                                                    <label for="field_edit_name">Изменить</label><br>--}}
    {{--                    --}}{{--                                                    <input type="checkbox" id="field_add_name" name="field_add_name" checked="checked">--}}
    {{--                    --}}{{--                                                    <label for="field_add_name">Добавить</label><br>--}}
    {{--                    --}}{{--                                                    <input type="checkbox" id="field_delete_name" name="field_delete_name" checked="checked">--}}
    {{--                    --}}{{--                                                    <label for="field_delete_name">Удалить</label><br>--}}
    {{--                    --}}{{--                                                </div>--}}
    {{--                    --}}{{--                                                <div class="col-xs-2">--}}
    {{--                    --}}{{--                                                    <input type="hidden" name="field_name" value="name">--}}
    {{--                    --}}{{--                                                    <select name="field_input_type_name">--}}
    {{--                    --}}{{--                                                        <option value="checkbox">--}}
    {{--                    --}}{{--                                                            Checkbox--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="multiple_checkbox">--}}
    {{--                    --}}{{--                                                            Multiple Checkbox--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="color">--}}
    {{--                    --}}{{--                                                            Color--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="date">--}}
    {{--                    --}}{{--                                                            Date--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="file">--}}
    {{--                    --}}{{--                                                            File--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="image">--}}
    {{--                    --}}{{--                                                            Image--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="multiple_images">--}}
    {{--                    --}}{{--                                                            Multiple Images--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="media_picker">--}}
    {{--                    --}}{{--                                                            Media Picker--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="number">--}}
    {{--                    --}}{{--                                                            Number--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="password">--}}
    {{--                    --}}{{--                                                            Password--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="radio_btn">--}}
    {{--                    --}}{{--                                                            Radio Button--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="rich_text_box">--}}
    {{--                    --}}{{--                                                            Rich Text Box--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="code_editor">--}}
    {{--                    --}}{{--                                                            Code Editor--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="markdown_editor">--}}
    {{--                    --}}{{--                                                            Markdown Editor--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="select_dropdown">--}}
    {{--                    --}}{{--                                                            Select Dropdown--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="select_multiple">--}}
    {{--                    --}}{{--                                                            Select Multiple--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="text" selected="">--}}
    {{--                    --}}{{--                                                            Text--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="text_area">--}}
    {{--                    --}}{{--                                                            Text Area--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="time">--}}
    {{--                    --}}{{--                                                            Time--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="timestamp">--}}
    {{--                    --}}{{--                                                            Timestamp--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="hidden">--}}
    {{--                    --}}{{--                                                            Hidden--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="coordinates">--}}
    {{--                    --}}{{--                                                            Coordinates--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                    </select>--}}
    {{--                    --}}{{--                                                </div>--}}
    {{--                    --}}{{--                                                <div class="col-xs-2">--}}
    {{--                    --}}{{--                                                    <input type="text" class="form-control" value="Name" name="field_display_name_name">--}}
    {{--                    --}}{{--                                                </div>--}}
    {{--                    --}}{{--                                                <div class="col-xs-4">--}}
    {{--                    --}}{{--                                                    <div class="alert alert-danger validation-error" style="display: none;">--}}
    {{--                    --}}{{--                                                        неверный формат JSON--}}
    {{--                    --}}{{--                                                    </div>--}}
    {{--                    --}}{{--                                                    <div class=" ace_editor ace-github" style="height: 48px;"><div style="position: absolute;"></div><textarea class="ace_text-input" wrap="off" autocorrect="off" autocapitalize="off" spellcheck="false" style="opacity: 0; height: 12px; width: 6.00031px; left: 37px; top: 0px;"></textarea><div class="ace_gutter"><div class="ace_layer ace_gutter-layer ace_folding-enabled" style="margin-top: 0px; height: 72px; width: 33px;"><div class="ace_gutter-cell " style="height: 12px;"></div></div><div class="ace_gutter-active-line" style="top: 0px; height: 12px;"></div></div><div class="ace_scroller" style="left: 33px; right: 0px; bottom: 0px;"><div class="ace_content" style="margin-top: 0px; width: 343px; height: 72px; margin-left: 0px;"><div class="ace_layer ace_print-margin-layer"><div class="ace_print-margin" style="left: 484.025px; visibility: visible;"></div></div><div class="ace_layer ace_marker-layer"><div class="ace_active-line" style="height:12px;top:0px;left:0;right:0;"></div></div><div class="ace_layer ace_text-layer" style="padding: 0px 4px;"><div class="ace_line" style="height:12px"><span class="ace_paren ace_lparen">{</span><span class="ace_paren ace_rparen">}</span></div></div><div class="ace_layer ace_marker-layer"></div><div class="ace_layer ace_cursor-layer ace_hidden-cursors"><div class="ace_cursor" style="left: 4px; top: 0px; width: 6.00031px; height: 12px;"></div></div></div></div><div class="ace_scrollbar ace_scrollbar-v" style="display: none; width: 20px; bottom: 0px;"><div class="ace_scrollbar-inner" style="width: 20px; height: 12px;"></div></div><div class="ace_scrollbar ace_scrollbar-h" style="display: none; height: 20px; left: 33px; right: 0px;"><div class="ace_scrollbar-inner" style="height: 20px; width: 376px;"></div></div><div style="height: auto; width: auto; top: 0px; left: 0px; visibility: hidden; position: absolute; white-space: pre; font: inherit; overflow: hidden;"><div style="height: auto; width: auto; top: 0px; left: 0px; visibility: hidden; position: absolute; white-space: pre; font: inherit; overflow: visible;"></div><div style="height: auto; width: auto; top: 0px; left: 0px; visibility: hidden; position: absolute; white-space: pre; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; overflow: visible;">XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</div></div></div><textarea id="json-input-&quot;name&quot;" class="resizable-editor" data-editor="json" name="field_details_name" style="display: none;">                                            {}--}}
    {{--                    --}}{{--                                        </textarea>--}}
    {{--                    --}}{{--                                                </div>--}}
    {{--                    --}}{{--                                            </div><div class="row row-dd">--}}
    {{--                    --}}{{--                                                <div class="col-xs-2">--}}
    {{--                    --}}{{--                                                    <h4><strong>slug</strong></h4>--}}
    {{--                    --}}{{--                                                    <strong>Тип:</strong> <span>varchar</span><br>--}}
    {{--                    --}}{{--                                                    <strong>Ключ:</strong> <span>UNI</span><br>--}}
    {{--                    --}}{{--                                                    <strong>Обязательный:</strong>--}}
    {{--                    --}}{{--                                                    <span>Да</span>--}}
    {{--                    --}}{{--                                                    <input type="hidden" value="1" name="field_required_slug" checked="checked">--}}
    {{--                    --}}{{--                                                    <div class="handler voyager-handle ui-sortable-handle"></div>--}}
    {{--                    --}}{{--                                                    <input class="row_order" type="hidden" value="5" name="field_order_slug">--}}
    {{--                    --}}{{--                                                </div>--}}
    {{--                    --}}{{--                                                <div class="col-xs-2">--}}
    {{--                    --}}{{--                                                    <input type="checkbox" id="field_browse_slug" name="field_browse_slug" checked="checked">--}}
    {{--                    --}}{{--                                                    <label for="field_browse_slug">Просмотр</label><br>--}}
    {{--                    --}}{{--                                                    <input type="checkbox" id="field_read_slug" name="field_read_slug" checked="checked">--}}
    {{--                    --}}{{--                                                    <label for="field_read_slug">Считывание</label><br>--}}
    {{--                    --}}{{--                                                    <input type="checkbox" id="field_edit_slug" name="field_edit_slug" checked="checked">--}}
    {{--                    --}}{{--                                                    <label for="field_edit_slug">Изменить</label><br>--}}
    {{--                    --}}{{--                                                    <input type="checkbox" id="field_add_slug" name="field_add_slug" checked="checked">--}}
    {{--                    --}}{{--                                                    <label for="field_add_slug">Добавить</label><br>--}}
    {{--                    --}}{{--                                                    <input type="checkbox" id="field_delete_slug" name="field_delete_slug" checked="checked">--}}
    {{--                    --}}{{--                                                    <label for="field_delete_slug">Удалить</label><br>--}}
    {{--                    --}}{{--                                                </div>--}}
    {{--                    --}}{{--                                                <div class="col-xs-2">--}}
    {{--                    --}}{{--                                                    <input type="hidden" name="field_slug" value="slug">--}}
    {{--                    --}}{{--                                                    <select name="field_input_type_slug">--}}
    {{--                    --}}{{--                                                        <option value="checkbox">--}}
    {{--                    --}}{{--                                                            Checkbox--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="multiple_checkbox">--}}
    {{--                    --}}{{--                                                            Multiple Checkbox--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="color">--}}
    {{--                    --}}{{--                                                            Color--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="date">--}}
    {{--                    --}}{{--                                                            Date--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="file">--}}
    {{--                    --}}{{--                                                            File--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="image">--}}
    {{--                    --}}{{--                                                            Image--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="multiple_images">--}}
    {{--                    --}}{{--                                                            Multiple Images--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="media_picker">--}}
    {{--                    --}}{{--                                                            Media Picker--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="number">--}}
    {{--                    --}}{{--                                                            Number--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="password">--}}
    {{--                    --}}{{--                                                            Password--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="radio_btn">--}}
    {{--                    --}}{{--                                                            Radio Button--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="rich_text_box">--}}
    {{--                    --}}{{--                                                            Rich Text Box--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="code_editor">--}}
    {{--                    --}}{{--                                                            Code Editor--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="markdown_editor">--}}
    {{--                    --}}{{--                                                            Markdown Editor--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="select_dropdown">--}}
    {{--                    --}}{{--                                                            Select Dropdown--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="select_multiple">--}}
    {{--                    --}}{{--                                                            Select Multiple--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="text" selected="">--}}
    {{--                    --}}{{--                                                            Text--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="text_area">--}}
    {{--                    --}}{{--                                                            Text Area--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="time">--}}
    {{--                    --}}{{--                                                            Time--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="timestamp">--}}
    {{--                    --}}{{--                                                            Timestamp--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="hidden">--}}
    {{--                    --}}{{--                                                            Hidden--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                        <option value="coordinates">--}}
    {{--                    --}}{{--                                                            Coordinates--}}
    {{--                    --}}{{--                                                        </option>--}}
    {{--                    --}}{{--                                                    </select>--}}
    {{--                    --}}{{--                                                </div>--}}
    {{--                    --}}{{--                                                <div class="col-xs-2">--}}
    {{--                    --}}{{--                                                    <input type="text" class="form-control" value="Slug" name="field_display_name_slug">--}}
    {{--                    --}}{{--                                                </div>--}}
    {{--                    --}}{{--                                                <div class="col-xs-4">--}}
    {{--                    --}}{{--                                                    <div class="alert alert-danger validation-error" style="display: none;">--}}
    {{--                    --}}{{--                                                        неверный формат JSON--}}
    {{--                    --}}{{--                                                    </div>--}}
    {{--                    --}}{{--                                                    <div class=" ace_editor ace-github" style="height: 60px;"><div style="position: absolute;"></div><textarea class="ace_text-input" wrap="off" autocorrect="off" autocapitalize="off" spellcheck="false" style="opacity: 0; height: 12px; width: 6.00031px; left: 37px; top: 0px;"></textarea><div class="ace_gutter"><div class="ace_layer ace_gutter-layer ace_folding-enabled" style="margin-top: 0px; height: 84px; width: 33px;"><div class="ace_gutter-cell " style="height: 12px;"><span class="ace_fold-widget ace_start ace_open" style="height: 12px;"></span></div><div class="ace_gutter-cell " style="height: 12px;"><span class="ace_fold-widget ace_start ace_open" style="height: 12px;"></span></div><div class="ace_gutter-cell " style="height: 12px;"></div><div class="ace_gutter-cell " style="height: 12px;"></div><div class="ace_gutter-cell " style="height: 12px;"></div></div><div class="ace_gutter-active-line" style="top: 0px; height: 12px;"></div></div><div class="ace_scroller" style="left: 33px; right: 0px; bottom: 0px;"><div class="ace_content" style="margin-top: 0px; width: 343px; height: 84px; margin-left: 0px;"><div class="ace_layer ace_print-margin-layer"><div class="ace_print-margin" style="left: 484.025px; visibility: visible;"></div></div><div class="ace_layer ace_marker-layer"><div class="ace_active-line" style="height:12px;top:0px;left:0;right:0;"></div></div><div class="ace_layer ace_text-layer" style="padding: 0px 4px;"><div class="ace_line" style="height:12px"><span class="ace_paren ace_lparen">{</span></div><div class="ace_line" style="height:12px">    <span class="ace_variable">"slugify"</span>: <span class="ace_paren ace_lparen">{</span></div><div class="ace_line" style="height:12px"><span class="ace_indent-guide">    </span>    <span class="ace_variable">"origin"</span>: <span class="ace_string">"name"</span></div><div class="ace_line" style="height:12px">    <span class="ace_paren ace_rparen">}</span></div><div class="ace_line" style="height:12px"><span class="ace_paren ace_rparen">}</span></div></div><div class="ace_layer ace_marker-layer"></div><div class="ace_layer ace_cursor-layer ace_hidden-cursors"><div class="ace_cursor" style="left: 4px; top: 0px; width: 6.00031px; height: 12px;"></div></div></div></div><div class="ace_scrollbar ace_scrollbar-v" style="display: none; width: 20px; bottom: 0px;"><div class="ace_scrollbar-inner" style="width: 20px; height: 60px;"></div></div><div class="ace_scrollbar ace_scrollbar-h" style="display: none; height: 20px; left: 33px; right: 0px;"><div class="ace_scrollbar-inner" style="height: 20px; width: 376px;"></div></div><div style="height: auto; width: auto; top: 0px; left: 0px; visibility: hidden; position: absolute; white-space: pre; font: inherit; overflow: hidden;"><div style="height: auto; width: auto; top: 0px; left: 0px; visibility: hidden; position: absolute; white-space: pre; font: inherit; overflow: visible;"></div><div style="height: auto; width: auto; top: 0px; left: 0px; visibility: hidden; position: absolute; white-space: pre; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; overflow: visible;">XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</div></div></div><textarea id="json-input-&quot;slug&quot;" class="resizable-editor" data-editor="json" name="field_details_slug" style="display: none;">                                            {"slugify":{"origin":"name"}}--}}
    {{--                    --}}{{--                                        </textarea>--}}
    {{--                    --}}{{--                                                </div>--}}
    {{--                    --}}{{--                                            </div><div class="row row-dd">--}}
    {{--                    --}}{{--                                                <div class="col-xs-2">--}}
    {{--                    --}}{{--                                                    <h4><strong>created_at</strong></h4>--}}
    {{--                    --}}{{--                                                    <strong>Тип:</strong> <span>timestamp</span><br>--}}
    {{--                    --}}{{--                                                    <strong>Ключ:</strong> <span></span><br>--}}
    {{--                    --}}{{--                                                    <strong>Обязательный:</strong>--}}
    {{--                    --}}{{--                                                    <span>Нет</span>--}}
    {{--                    --}}{{--                                                    <input type="hidden" value="0" name="field_required_created_at">--}}
    {{--                    --}}{{--                                                    <div class="handler voyager-handle ui-sortable-handle"></div>--}}
    {{--                    --}}{{--                                                    <input class="row_order" type="hidden" value="6" name="field_order_created_at">--}}
    {{--                    --}}{{--                                                </div>--}}
    {{--                    --}}{{--                                                <div class="col-xs-2">--}}
    {{--                    --}}{{--                                                    <input type="checkbox" id="field_browse_created_at" name="field_browse_created_at">--}}
    {{--                    --}}{{--                                                    <label for="field_browse_created_at">Просмотр</label><br>--}}
    {{--                    --}}{{--                                                    <input type="checkbox" id="field_read_created_at" name="field_read_created_at" checked="checked">--}}
    {{--                    --}}{{--                                                    <label for="field_read_created_at">Считывание</label><br>--}}
    {{--                    --}}{{--                                                    <input type="checkbox" id="field_edit_created_at" name="field_edit_created_at">--}}
    {{--                    --}}{{--                                                    <label for="field_edit_created_at">Изменить</label><br>--}}
    {{--                    --}}{{--                                                    <input type="checkbox" id="field_add_created_at" name="field_add_created_at">--}}
    {{--                    --}}{{--                                                    <label for="field_add_created_at">Добавить</label><br>--}}
    {{--                    --}}{{--                                                    <input type="checkbox" id="field_delete_created_at" name="field_delete_created_at">--}}
    {{--                    --}}{{--                                                    <label for="field_delete_created_at">Удалить</label><br>--}}
    {{--                    --}}{{--                                                </div>--}}
    {{--                    --}}{{--                                                <div class="col-xs-2">--}}
    {{--                    --}}{{--                                                    <input type="hidden" name="field_created_at" value="created_at">--}}
    {{--                    --}}{{--                                                    <p>Временная метка</p>--}}
    {{--                    --}}{{--                                                    <input type="hidden" value="timestamp" name="field_input_type_created_at">--}}
    {{--                    --}}{{--                                                </div>--}}
    {{--                    --}}{{--                                                <div class="col-xs-2">--}}
    {{--                    --}}{{--                                                    <input type="text" class="form-control" value="Created At" name="field_display_name_created_at">--}}
    {{--                    --}}{{--                                                </div>--}}
    {{--                    --}}{{--                                                <div class="col-xs-4">--}}
    {{--                    --}}{{--                                                    <div class="alert alert-danger validation-error" style="display: none;">--}}
    {{--                    --}}{{--                                                        неверный формат JSON--}}
    {{--                    --}}{{--                                                    </div>--}}
    {{--                    --}}{{--                                                    <div class=" ace_editor ace-github" style="height: 48px;"><div style="position: absolute;"></div><textarea class="ace_text-input" wrap="off" autocorrect="off" autocapitalize="off" spellcheck="false" style="opacity: 0; height: 12px; width: 6.00031px; left: 37px; top: 0px;"></textarea><div class="ace_gutter"><div class="ace_layer ace_gutter-layer ace_folding-enabled" style="margin-top: 0px; height: 72px; width: 33px;"><div class="ace_gutter-cell " style="height: 12px;"></div></div><div class="ace_gutter-active-line" style="top: 0px; height: 12px;"></div></div><div class="ace_scroller" style="left: 33px; right: 0px; bottom: 0px;"><div class="ace_content" style="margin-top: 0px; width: 343px; height: 72px; margin-left: 0px;"><div class="ace_layer ace_print-margin-layer"><div class="ace_print-margin" style="left: 484.025px; visibility: visible;"></div></div><div class="ace_layer ace_marker-layer"><div class="ace_active-line" style="height:12px;top:0px;left:0;right:0;"></div></div><div class="ace_layer ace_text-layer" style="padding: 0px 4px;"><div class="ace_line" style="height:12px"><span class="ace_paren ace_lparen">{</span><span class="ace_paren ace_rparen">}</span></div></div><div class="ace_layer ace_marker-layer"></div><div class="ace_layer ace_cursor-layer ace_hidden-cursors"><div class="ace_cursor" style="left: 4px; top: 0px; width: 6.00031px; height: 12px;"></div></div></div></div><div class="ace_scrollbar ace_scrollbar-v" style="display: none; width: 20px; bottom: 0px;"><div class="ace_scrollbar-inner" style="width: 20px; height: 12px;"></div></div><div class="ace_scrollbar ace_scrollbar-h" style="display: none; height: 20px; left: 33px; right: 0px;"><div class="ace_scrollbar-inner" style="height: 20px; width: 376px;"></div></div><div style="height: auto; width: auto; top: 0px; left: 0px; visibility: hidden; position: absolute; white-space: pre; font: inherit; overflow: hidden;"><div style="height: auto; width: auto; top: 0px; left: 0px; visibility: hidden; position: absolute; white-space: pre; font: inherit; overflow: visible;"></div><div style="height: auto; width: auto; top: 0px; left: 0px; visibility: hidden; position: absolute; white-space: pre; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; overflow: visible;">XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</div></div></div><textarea id="json-input-&quot;created_at&quot;" class="resizable-editor" data-editor="json" name="field_details_created_at" style="display: none;">                                            {}--}}
    {{--                    --}}{{--                                        </textarea>--}}
    {{--                    --}}{{--                                                </div>--}}
    {{--                    --}}{{--                                            </div><div class="row row-dd">--}}
    {{--                    --}}{{--                                                <div class="col-xs-2">--}}
    {{--                    --}}{{--                                                    <h4><strong>updated_at</strong></h4>--}}
    {{--                    --}}{{--                                                    <strong>Тип:</strong> <span>timestamp</span><br>--}}
    {{--                    --}}{{--                                                    <strong>Ключ:</strong> <span></span><br>--}}
    {{--                    --}}{{--                                                    <strong>Обязательный:</strong>--}}
    {{--                    --}}{{--                                                    <span>Нет</span>--}}
    {{--                    --}}{{--                                                    <input type="hidden" value="0" name="field_required_updated_at">--}}
    {{--                    --}}{{--                                                    <div class="handler voyager-handle ui-sortable-handle"></div>--}}
    {{--                    --}}{{--                                                    <input class="row_order" type="hidden" value="7" name="field_order_updated_at">--}}
    {{--                    --}}{{--                                                </div>--}}
    {{--                    --}}{{--                                                <div class="col-xs-2">--}}
    {{--                    --}}{{--                                                    <input type="checkbox" id="field_browse_updated_at" name="field_browse_updated_at">--}}
    {{--                    --}}{{--                                                    <label for="field_browse_updated_at">Просмотр</label><br>--}}
    {{--                    --}}{{--                                                    <input type="checkbox" id="field_read_updated_at" name="field_read_updated_at">--}}
    {{--                    --}}{{--                                                    <label for="field_read_updated_at">Считывание</label><br>--}}
    {{--                    --}}{{--                                                    <input type="checkbox" id="field_edit_updated_at" name="field_edit_updated_at">--}}
    {{--                    --}}{{--                                                    <label for="field_edit_updated_at">Изменить</label><br>--}}
    {{--                    --}}{{--                                                    <input type="checkbox" id="field_add_updated_at" name="field_add_updated_at">--}}
    {{--                    --}}{{--                                                    <label for="field_add_updated_at">Добавить</label><br>--}}
    {{--                    --}}{{--                                                    <input type="checkbox" id="field_delete_updated_at" name="field_delete_updated_at">--}}
    {{--                    --}}{{--                                                    <label for="field_delete_updated_at">Удалить</label><br>--}}
    {{--                    --}}{{--                                                </div>--}}
    {{--                    --}}{{--                                                <div class="col-xs-2">--}}
    {{--                    --}}{{--                                                    <input type="hidden" name="field_updated_at" value="updated_at">--}}
    {{--                    --}}{{--                                                    <p>Временная метка</p>--}}
    {{--                    --}}{{--                                                    <input type="hidden" value="timestamp" name="field_input_type_updated_at">--}}
    {{--                    --}}{{--                                                </div>--}}
    {{--                    --}}{{--                                                <div class="col-xs-2">--}}
    {{--                    --}}{{--                                                    <input type="text" class="form-control" value="Updated At" name="field_display_name_updated_at">--}}
    {{--                    --}}{{--                                                </div>--}}
    {{--                    --}}{{--                                                <div class="col-xs-4">--}}
    {{--                    --}}{{--                                                    <div class="alert alert-danger validation-error" style="display: none;">--}}
    {{--                    --}}{{--                                                        неверный формат JSON--}}
    {{--                    --}}{{--                                                    </div>--}}
    {{--                    --}}{{--                                                    <div class=" ace_editor ace-github" style="height: 48px;"><div style="position: absolute;"></div><textarea class="ace_text-input" wrap="off" autocorrect="off" autocapitalize="off" spellcheck="false" style="opacity: 0; height: 12px; width: 6.00031px; left: 37px; top: 0px;"></textarea><div class="ace_gutter"><div class="ace_layer ace_gutter-layer ace_folding-enabled" style="margin-top: 0px; height: 72px; width: 33px;"><div class="ace_gutter-cell " style="height: 12px;"></div></div><div class="ace_gutter-active-line" style="top: 0px; height: 12px;"></div></div><div class="ace_scroller" style="left: 33px; right: 0px; bottom: 0px;"><div class="ace_content" style="margin-top: 0px; width: 343px; height: 72px; margin-left: 0px;"><div class="ace_layer ace_print-margin-layer"><div class="ace_print-margin" style="left: 484.025px; visibility: visible;"></div></div><div class="ace_layer ace_marker-layer"><div class="ace_active-line" style="height:12px;top:0px;left:0;right:0;"></div></div><div class="ace_layer ace_text-layer" style="padding: 0px 4px;"><div class="ace_line" style="height:12px"><span class="ace_paren ace_lparen">{</span><span class="ace_paren ace_rparen">}</span></div></div><div class="ace_layer ace_marker-layer"></div><div class="ace_layer ace_cursor-layer ace_hidden-cursors"><div class="ace_cursor" style="left: 4px; top: 0px; width: 6.00031px; height: 12px;"></div></div></div></div><div class="ace_scrollbar ace_scrollbar-v" style="display: none; width: 20px; bottom: 0px;"><div class="ace_scrollbar-inner" style="width: 20px; height: 12px;"></div></div><div class="ace_scrollbar ace_scrollbar-h" style="display: none; height: 20px; left: 33px; right: 0px;"><div class="ace_scrollbar-inner" style="height: 20px; width: 376px;"></div></div><div style="height: auto; width: auto; top: 0px; left: 0px; visibility: hidden; position: absolute; white-space: pre; font: inherit; overflow: hidden;"><div style="height: auto; width: auto; top: 0px; left: 0px; visibility: hidden; position: absolute; white-space: pre; font: inherit; overflow: visible;"></div><div style="height: auto; width: auto; top: 0px; left: 0px; visibility: hidden; position: absolute; white-space: pre; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; overflow: visible;">XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</div></div></div><textarea id="json-input-&quot;updated_at&quot;" class="resizable-editor" data-editor="json" name="field_details_updated_at" style="display: none;">                                            {}--}}
    {{--                    --}}{{--                                        </textarea>--}}
    {{--                    --}}{{--                                                </div>--}}
    {{--                    --}}{{--                                            </div></div>--}}

    {{--                    --}}{{--                                    </div><!-- .panel-body -->--}}
    {{--                    --}}{{--                                    <div class="panel-footer">--}}
    {{--                    --}}{{--                                        <div class="btn btn-new-relationship"><i class="voyager-heart"></i> <span>--}}
    {{--                    --}}{{--                             Создать отношение</span></div>--}}
    {{--                    --}}{{--                                    </div>--}}
    {{--                    --}}{{--                                </div><!-- .panel -->--}}

    {{--                    --}}{{--                                <button type="submit" class="btn pull-right btn-primary">Отправить</button>--}}

    {{--                    --}}{{--                            </form>--}}
    {{--                    --}}{{--                        </div>--}}

    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}


@endsection

