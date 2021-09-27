@extends('layouts.app')

@section('content')


            <div class="side-body padding-top">

                <div class="container-fluid">
                    <h1 class="page-title">
                        <i class="voyager-people"></i> Заявки
                    </h1>
                    <a href="http://simpatik/admin/roles/create" class="btn btn-success btn-add-new">
                        <i class="voyager-plus"></i> <span>Добавить</span>
                    </a>
{{--                    <a class="btn btn-danger" id="bulk_delete_btn"><i class="voyager-trash"></i> <span>Удалить выбранное</span></a>--}}


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

