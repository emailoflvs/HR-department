@extends('layouts.app')

@section('content')


            <div class="side-body padding-top">

                <div class="container-fluid">
                    <h1 class="page-title">
                        <i class="voyager-people"></i> Список клиентов
                    </h1>
                    <a href="http://simpatik/admin/roles/create" class="btn btn-success btn-add-new">
                        <i class="voyager-plus"></i> <span>Добавить</span>
                    </a>
                    <a class="btn btn-danger" id="bulk_delete_btn"><i class="voyager-trash"></i> <span>Удалить выбранное</span></a>


                    <!-- /.modal -->

                    <script>
                        window.onload = function () {
                            // Bulk delete selectors
                            var $bulkDeleteBtn = $('#bulk_delete_btn');
                            var $bulkDeleteModal = $('#bulk_delete_modal');
                            var $bulkDeleteCount = $('#bulk_delete_count');
                            var $bulkDeleteDisplayName = $('#bulk_delete_display_name');
                            var $bulkDeleteInput = $('#bulk_delete_input');
                            // Reposition modal to prevent z-index issues
                            $bulkDeleteModal.appendTo('body');
                            // Bulk delete listener
                            $bulkDeleteBtn.click(function () {
                                var ids = [];
                                var $checkedBoxes = $('#dataTable input[type=checkbox]:checked').not('.select_all');
                                var count = $checkedBoxes.length;
                                if (count) {
                                    // Reset input value
                                    $bulkDeleteInput.val('');
                                    // Deletion info
                                    var displayName = count > 1 ? 'Roles' : 'Role';
                                    displayName = displayName.toLowerCase();
                                    $bulkDeleteCount.html(count);
                                    $bulkDeleteDisplayName.html(displayName);
                                    // Gather IDs
                                    $.each($checkedBoxes, function () {
                                        var value = $(this).val();
                                        ids.push(value);
                                    })
                                    // Set input value
                                    $bulkDeleteInput.val(ids);
                                    // Show modal
                                    $bulkDeleteModal.modal('show');
                                } else {
                                    // No row selected
                                    toastr.warning('Вы ничего не выбрали для удаления!');
                                }
                            });
                        }
                    </script>
                </div>

                <div id="voyager-notifications"></div>

                <div class="page-content browse container-fluid">
                    <div class="alerts">
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-bordered">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <div id="dataTable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="dataTable_length"><label>Показать <select name="dataTable_length" aria-controls="dataTable" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> записей</label></div></div><div class="col-sm-6"><div id="dataTable_filter" class="dataTables_filter"><label>Поиск:<input type="search" class="form-control input-sm" placeholder="" aria-controls="dataTable"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="dataTable" class="table table-hover dataTable no-footer" role="grid" aria-describedby="dataTable_info">
                                                        <thead>
                                                        <tr role="row"><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="

                                            : активировать для сортировки столбца по возрастанию" style="width: 66px;">
                                                                <input type="checkbox" class="select_all">
                                                            </th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="
                                                                                        Name
                                                                                    : активировать для сортировки столбца по возрастанию" style="width: 137px;">
                                                                Name
                                                            </th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="
                                                                                        Display Name
                                                                                    : активировать для сортировки столбца по возрастанию" style="width: 230px;">
                                                                Display Name
                                                            </th><th class="actions text-right sorting_disabled" rowspan="1" colspan="1" aria-label="Доступные действия" style="width: 595px;">Доступные действия</th></tr>
                                                        </thead>
                                                        <tbody>




                                                        <tr role="row" class="odd">
                                                            <td>
                                                                <input type="checkbox" name="row_id" id="checkbox_4" value="4">
                                                            </td>
                                                            <td>
                                                                <div>operator</div>
                                                            </td>
                                                            <td>
                                                                <div>Оператор</div>
                                                            </td>
                                                            <td class="no-sort no-click bread-actions">
                                                                <a href="javascript:;" title="Удалить" class="btn btn-sm btn-danger pull-right delete" data-id="4" id="delete-4">
                                                                    <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Удалить</span>
                                                                </a>
                                                                <a href="http://simpatik/admin/roles/4/edit" title="Изменить" class="btn btn-sm btn-primary pull-right edit">
                                                                    <i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Изменить</span>
                                                                </a>
                                                                <a href="http://simpatik/admin/roles/4" title="Просмотр" class="btn btn-sm btn-warning pull-right view">
                                                                    <i class="voyager-eye"></i> <span class="hidden-xs hidden-sm">Просмотр</span>
                                                                </a>
                                                            </td>
                                                        </tr><tr role="row" class="even">
                                                            <td>
                                                                <input type="checkbox" name="row_id" id="checkbox_3" value="3">
                                                            </td>
                                                            <td>
                                                                <div>developer</div>
                                                            </td>
                                                            <td>
                                                                <div>Программист</div>
                                                            </td>
                                                            <td class="no-sort no-click bread-actions">
                                                                <a href="javascript:;" title="Удалить" class="btn btn-sm btn-danger pull-right delete" data-id="3" id="delete-3">
                                                                    <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Удалить</span>
                                                                </a>
                                                                <a href="http://simpatik/admin/roles/3/edit" title="Изменить" class="btn btn-sm btn-primary pull-right edit">
                                                                    <i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Изменить</span>
                                                                </a>
                                                                <a href="http://simpatik/admin/roles/3" title="Просмотр" class="btn btn-sm btn-warning pull-right view">
                                                                    <i class="voyager-eye"></i> <span class="hidden-xs hidden-sm">Просмотр</span>
                                                                </a>
                                                            </td>
                                                        </tr><tr role="row" class="odd">
                                                            <td>
                                                                <input type="checkbox" name="row_id" id="checkbox_1" value="1">
                                                            </td>
                                                            <td>
                                                                <div>admin</div>
                                                            </td>
                                                            <td>
                                                                <div>Администратор</div>
                                                            </td>
                                                            <td class="no-sort no-click bread-actions">
                                                                <a href="javascript:;" title="Удалить" class="btn btn-sm btn-danger pull-right delete" data-id="1" id="delete-1">
                                                                    <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Удалить</span>
                                                                </a>
                                                                <a href="http://simpatik/admin/roles/1/edit" title="Изменить" class="btn btn-sm btn-primary pull-right edit">
                                                                    <i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Изменить</span>
                                                                </a>
                                                                <a href="http://simpatik/admin/roles/1" title="Просмотр" class="btn btn-sm btn-warning pull-right view">
                                                                    <i class="voyager-eye"></i> <span class="hidden-xs hidden-sm">Просмотр</span>
                                                                </a>
                                                            </td>
                                                        </tr><tr role="row" class="even">
                                                            <td>
                                                                <input type="checkbox" name="row_id" id="checkbox_2" value="2">
                                                            </td>
                                                            <td>
                                                                <div>user</div>
                                                            </td>
                                                            <td>
                                                                <div>Normal User</div>
                                                            </td>
                                                            <td class="no-sort no-click bread-actions">
                                                                <a href="javascript:;" title="Удалить" class="btn btn-sm btn-danger pull-right delete" data-id="2" id="delete-2">
                                                                    <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Удалить</span>
                                                                </a>
                                                                <a href="http://simpatik/admin/roles/2/edit" title="Изменить" class="btn btn-sm btn-primary pull-right edit">
                                                                    <i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Изменить</span>
                                                                </a>
                                                                <a href="http://simpatik/admin/roles/2" title="Просмотр" class="btn btn-sm btn-warning pull-right view">
                                                                    <i class="voyager-eye"></i> <span class="hidden-xs hidden-sm">Просмотр</span>
                                                                </a>
                                                            </td>
                                                        </tr></tbody>
                                                    </table></div></div><div class="row"><div class="col-sm-6"><div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Показано от 1 до 4 из 4 записей</div></div><div class="col-sm-6"><div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate"><ul class="pagination"><li class="paginate_button previous disabled" aria-controls="dataTable" tabindex="0" id="dataTable_previous"><a href="#">Предыдущая</a></li><li class="paginate_button active" aria-controls="dataTable" tabindex="0"><a href="#">1</a></li><li class="paginate_button next disabled" aria-controls="dataTable" tabindex="0" id="dataTable_next"><a href="#">Следующая</a></li></ul></div></div></div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal modal-danger fade" tabindex="-1" id="bulk_delete_modal" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <h4 class="modal-title">
                                    <i class="voyager-trash"></i> Вы точно хотите удалить <span id="bulk_delete_count"></span> <span id="bulk_delete_display_name"></span>?
                                </h4>
                            </div>
                            <div class="modal-body" id="bulk_delete_modal_body">
                            </div>
                            <div class="modal-footer">
                                <form action="http://simpatik/admin/users/0" id="bulk_delete_form" method="POST">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="gppG4FBHyL0I8CN1PGIH90iMEySCWtsCtIPQDPJX">
                                    <input type="hidden" name="ids" id="bulk_delete_input" value="">
                                    <input type="submit" class="btn btn-danger pull-right delete-confirm" value="Да, удалить это users">
                                </form>
                                <button type="button" class="btn btn-default pull-right" data-dismiss="modal">
                                    Отмена
                                </button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div>

                <div class="page-content">
                    <div class="alerts">
                    </div>
                    <div class="analytics-container">
{{--                        <p style="border-radius:4px; padding:20px; background:#fff; margin:0; color:#999; text-align:center;">--}}
                        <h3 style="border-radius:4px; padding:20px; background:#fff; margin:0; color:#999; text-align:center;">


                            Основной контент


                        </h3>

                    </div>
                </div>
            </div>



@endsection

