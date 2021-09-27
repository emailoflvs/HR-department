@include('layouts.header')

<body class="voyager ">

{{--<div id="voyager-loader" style="display: none;">--}}
{{--    <img src="/admin/voyager-assets?path=images%2Flogo-icon.png" alt="Voyager Loader">--}}
{{--</div>--}}
<div class="app-container">
    <div class="fadetoblack visible-xs"></div>
    <div class="row content-container">
    @auth
        @include('navigation.menu')
    @endauth


    <!-- Main Content -->
        <div class="container-fluid">
            <div class="side-body padding-top">



                <div id="voyager-notifications"></div>
                <div class="page-content browse container-fluid">

                            <table id="dataTable" class="table table-hover">
                                <tbody>
                                <tr>
                                    <td class="no-sort no-click bread-actions">
                                        <a href="javascript:;" title="Удалить"
                                           class="btn btn-sm btn-danger pull-right delete" data-id="6" id="delete-6">
                                            <i class="voyager-trash"></i> <span
                                                class="hidden-xs hidden-sm">Удалить</span>
                                        </a>
                                        <a href="http://simpatik/admin/users/6/edit" title="Изменить"
                                           class="btn btn-sm btn-primary pull-right edit">
                                            <i class="voyager-edit"></i> <span
                                                class="hidden-xs hidden-sm">Изменить</span>
                                        </a>
                                        <a href="http://simpatik/admin/users/6" title="Просмотр"
                                           class="btn btn-sm btn-warning pull-right view">
                                            <i class="voyager-eye"></i> <span
                                                class="hidden-xs hidden-sm">Просмотр</span>
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                    </div>


                <div class="modal relationship fade" tabindex="-1" id="delete_modal" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть"><span
                                            aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title"><i class="voyager-trash"></i> Вы действительно хотите
                                        удалить это? user?</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <form action="#" id="delete_form" method="POST">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token"
                                               value="xr2FaAiTyiz2XZRBwTa9RnU8nxb6qdN6R7l1I9iN">
                                        <input type="submit" class="btn btn-danger pull-right delete-confirm"
                                               value="Да, удалить!">
                                    </form>
                                    <button type="button" class="btn btn-default pull-right" data-dismiss="modal">
                                        Отмена
                                    </button>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->



                <span><a href="javascript:;" title="Выйти"
                   class="btn btn-sm btn-warning pull-right call_place_exit" data-id="6" id="out-6">
                    <span class="hidden-xs hidden-sm">Выйти</span></a></span>

                @include('modals.call_place_exit')


            </div>
            </div>
        </div>
    <!-- Javascript Libs -->



    <script type="text/javascript" src="http://simpatik/admin/voyager-assets?path=js%2Fapp.js"></script>


    <script>

    </script>
    <style>
        .dd-placeholder {
            flex: 1;
            width: 100%;
            min-width: 200px;
            max-width: 250px;
        }
    </style>
    <!-- DataTables -->
    <script>
        $(document).ready(function () {
            var table = $('#dataTable').DataTable({
                "order": [], "language": {
                    "sEmptyTable": "\u0412 \u0442\u0430\u0431\u043b\u0438\u0446\u0435 \u043d\u0435\u0442 \u0434\u0430\u043d\u043d\u044b\u0445",
                    "sInfo": "\u041f\u043e\u043a\u0430\u0437\u0430\u043d\u043e \u043e\u0442 _START_ \u0434\u043e _END_ \u0438\u0437 _TOTAL_ \u0437\u0430\u043f\u0438\u0441\u0435\u0439",
                    "sInfoEmpty": "\u041f\u043e\u043a\u0430\u0437\u0430\u043d\u043e 0 \u0438\u0437 0 \u0437\u0430\u043f\u0438\u0441\u0435\u0439",
                    "sInfoFiltered": "(\u0432\u044b\u0431\u0440\u0430\u043d\u043e \u0438\u0437 _MAX_ \u0437\u0430\u043f\u0438\u0441\u0435\u0439)",
                    "sInfoPostFix": "",
                    "sInfoThousands": ",",
                    "sLengthMenu": "\u041f\u043e\u043a\u0430\u0437\u0430\u0442\u044c _MENU_ \u0437\u0430\u043f\u0438\u0441\u0435\u0439",
                    "sLoadingRecords": "\u0417\u0430\u0433\u0440\u0443\u0437\u043a\u0430 \u0437\u0430\u043f\u0438\u0441\u0435\u0439...",
                    "sProcessing": "\u041f\u043e\u0434\u043e\u0436\u0434\u0438\u0442\u0435...",
                    "sSearch": "\u041f\u043e\u0438\u0441\u043a:",
                    "sZeroRecords": "\u0417\u0430\u043f\u0438\u0441\u0438 \u043e\u0442\u0441\u0443\u0442\u0441\u0442\u0432\u0443\u044e\u0442",
                    "oPaginate": {
                        "sFirst": "\u041f\u0435\u0440\u0432\u0430\u044f",
                        "sLast": "\u041f\u043e\u0441\u043b\u0435\u0434\u043d\u044f\u044f",
                        "sNext": "\u0421\u043b\u0435\u0434\u0443\u044e\u0449\u0430\u044f",
                        "sPrevious": "\u041f\u0440\u0435\u0434\u044b\u0434\u0443\u0449\u0430\u044f"
                    },
                    "oAria": {
                        "sSortAscending": ": \u0430\u043a\u0442\u0438\u0432\u0438\u0440\u043e\u0432\u0430\u0442\u044c \u0434\u043b\u044f \u0441\u043e\u0440\u0442\u0438\u0440\u043e\u0432\u043a\u0438 \u0441\u0442\u043e\u043b\u0431\u0446\u0430 \u043f\u043e \u0432\u043e\u0437\u0440\u0430\u0441\u0442\u0430\u043d\u0438\u044e",
                        "sSortDescending": ": \u0430\u043a\u0442\u0438\u0432\u0438\u0440\u043e\u0432\u0430\u0442\u044c \u0434\u043b\u044f \u0441\u043e\u0440\u0442\u0438\u0440\u043e\u0432\u043a\u0438 \u0441\u0442\u043e\u043b\u0431\u0446\u0430 \u043f\u043e \u0443\u0431\u044b\u0432\u0430\u043d\u0438\u044e"
                    }
                }, "columnDefs": [{"targets": -1, "searchable": false, "orderable": false}]
            });

            $('.select_all').on('click', function (e) {
                $('input[name="row_id"]').prop('checked', $(this).prop('checked')).trigger('change');
            });
        });


        var deleteFormAction;
        $('td').on('click', '.delete', function (e) {
            $('#delete_form')[0].action = 'http://simpatik/admin/users/__id'.replace('__id', $(this).data('id'));
            $('#delete_modal').modal('show');
        });

        $('span').on('click', '.call_place_exit', function (e) {
            $('#delete_form')[0].action = 'http://simpatik/admin/users/__id'.replace('__id', $(this).data('id'));
            $('#call_place_exit_modal').modal('show');
        });

        $('input[name="row_id"]').on('change', function () {
            var ids = [];
            $('input[name="row_id"]').each(function () {
                if ($(this).is(':checked')) {
                    ids.push($(this).val());
                }
            });
            $('.selected_ids').val(ids);
        });
    </script>

</body>
</html>
