{{--                <div class="modal modal-success fade" tabindex="-1" id="place-out_modal" role="dialog">--}}
{{--                    <div class="modal-dialog">--}}
{{--                        <form name="working" class="modal-content" action="/working" id="place-out_form" method="POST">--}}
{{--                            <div class="modal-header">--}}
{{--                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span--}}
{{--                                        aria-hidden="true">&times;</span></button>--}}
{{--                                <h4 class="modal-title"><i class="voyager-plus"></i>Причина выхода</h4>--}}
{{--                            </div>--}}
{{--                            <div class="modal-body">--}}
{{--                                <div class="form-group">--}}
{{--                                    <br>--}}
{{--                                    <label for="name">Причина выхода</label>--}}
{{--                                    <select name="out-reason" class="form-control input-sm" id="out-reason">--}}
{{--                                    @php--}}
{{--                                        use App\WorkingStatus;--}}
{{--                                        foreach (WorkingStatus::where ('type','=',0)->get() as $item)--}}
{{--                                            echo "<option value='".$item->getAttributes()['id']."'>".$item->getAttributes()['name']."</option>";--}}
{{--                                    @endphp--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="modal-footer">--}}
{{--                                {{ csrf_field() }}--}}
{{--                                <input type="submit" class="btn btn-success pull-right"--}}
{{--                                       value="Выйти">--}}
{{--                                <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Отмена</button>--}}
{{--                            </div>--}}
{{--                            <input type="hidden" name="working_status" value="0">--}}
{{--                        </form><!-- /.modal-content -->--}}
{{--                    </div><!-- /.modal-dialog -->--}}
{{--                </div><!-- /.modal -->--}}


@section('javascript')
    <!-- DataTables -->
    <script>
        $(document).ready(function () {
            $('#dataTable').DataTable({"order": []});
        });

        $('.place-out').on('click', function (e) {
            var form = $('#place-out_form')[0];

            $('#place-out_modal').modal('show');
        });

        $('.page-title').on('click', '.install', function (e) {
            var form = $('#install_form')[0];

            $('#install_modal').modal('show');
        });

        $('td').on('click', '.delete', function (e) {
            var form = $('#delete_form')[0];

            form.action = parseActionUrl(form.action, $(this).data('id'));

            $('#delete_modal').modal('show');
        });

        $('span').on('click', '.call_place_exit', function (e) {
            // $('#delete_form')[0].action = 'http://simpatik/admin/users/__id'.replace('__id', $(this).data('id'));
            $('#call_place_exit_modal').modal('show');
        });


    </script>
    @stop

    </div>
    </div>
    </div>
    </div>

    @include('voyager::partials.app-footer')

    <!-- Javascript Libs -->


    <script type="text/javascript" src="{{ voyager_asset('js/app.js') }}"></script>

    <script>
            @if(Session::has('alerts'))
        let alerts = {!! json_encode(Session::get('alerts')) !!};
        helpers.displayAlerts(alerts, toastr);
        @endif

        @if(Session::has('message'))

        // TODO: change Controllers to use AlertsMessages trait... then remove this
        var alertType = {!! json_encode(Session::get('alert-type', 'info')) !!};
        var alertMessage = {!! json_encode(Session::get('message')) !!};
        var alerter = toastr[alertType];

        if (alerter) {
            alerter(alertMessage);
        } else {
            toastr.error("toastr alert-type " + alertType + " is unknown");
        }
        @endif
    </script>
    @include('voyager::media.manager')
    @yield('javascript')
    @stack('javascript')
    @if(!empty(config('voyager.additional_js')))<!-- Additional Javascript -->
    @foreach(config('voyager.additional_js') as $js)<script type="text/javascript" src="{{ asset($js) }}"></script>@endforeach
    @endif


    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.0/themes/smoothness/jquery-ui.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js"></script>

    <script>
        window.invalidEditors = [];
        var validationAlerts = $('.validation-error');
        validationAlerts.hide();
        $(function () {
            /**
             * Reorder items
             */
            reOrderItems();

            $('#bread-items').disableSelection();

            $('[data-toggle="tooltip"]').tooltip();

            $('.toggleswitch').bootstrapToggle();

            $('textarea[data-editor]').each(function () {
                var textarea = $(this),
                    mode = textarea.data('editor'),
                    editDiv = $('<div>').insertBefore(textarea),
                    editor = ace.edit(editDiv[0]),
                    _session = editor.getSession(),
                    valid = false;
                textarea.hide();

                // Validate JSON
                _session.on("changeAnnotation", function(){
                    valid = _session.getAnnotations().length ? false : true;
                    if (!valid) {
                        if (window.invalidEditors.indexOf(textarea.attr('id')) < 0) {
                            window.invalidEditors.push(textarea.attr('id'));
                        }
                    } else {
                        for(var i = window.invalidEditors.length - 1; i >= 0; i--) {
                            if(window.invalidEditors[i] == textarea.attr('id')) {
                                window.invalidEditors.splice(i, 1);
                            }
                        }
                    }
                });

                // Use workers only when needed
                editor.on('focus', function () {
                    _session.setUseWorker(true);
                });
                editor.on('blur', function () {
                    if (valid) {
                        textarea.siblings('.validation-error').hide();
                        _session.setUseWorker(false);
                    } else {
                        textarea.siblings('.validation-error').show();
                    }
                });

                _session.setUseWorker(false);

                editor.setAutoScrollEditorIntoView(true);
                editor.$blockScrolling = Infinity;
                editor.setOption("maxLines", 30);
                editor.setOption("minLines", 4);
                editor.setOption("showLineNumbers", false);
                editor.setTheme("ace/theme/github");
                _session.setMode("ace/mode/json");
                if (textarea.val()) {
                    _session.setValue(JSON.stringify(JSON.parse(textarea.val()), null, 4));
                }

                _session.setMode("ace/mode/" + mode);

                // copy back to textarea on form submit...
                textarea.closest('form').on('submit', function (ev) {
                    if (window.invalidEditors.length) {
                        ev.preventDefault();
                        ev.stopPropagation();
                        validationAlerts.hide();
                        for (var i = window.invalidEditors.length - 1; i >= 0; i--) {
                            $('#'+window.invalidEditors[i]).siblings('.validation-error').show();
                        }
                        toastr.error('Введен неверный формат JSON', 'Ошибки при проверке данных', {"preventDuplicates": true, "preventOpenDuplicates": true});
                    } else {
                        if (_session.getValue()) {
                            // uglify JSON object and update textarea for submit purposes
                            textarea.val(JSON.stringify(JSON.parse(_session.getValue())));
                        }else{
                            textarea.val('');
                        }
                    }
                });
            });

        });

        function reOrderItems(){
            $('#bread-items').sortable({
                handle: '.handler',
                update: function (e, ui) {
                    var _rows = $('#bread-items').find('.row_order'),
                        _size = _rows.length;

                    for (var i = 0; i < _size; i++) {
                        $(_rows[i]).val(i+1);
                    }
                },
                create: function (event, ui) {
                    sort();
                }
            });
        }

        function sort() {
            var sortableList = $('#bread-items');
            var listitems = $('div.row.row-dd', sortableList);

            listitems.sort(function (a, b) {
                return (parseInt($(a).find('.row_order').val()) > parseInt($(b).find('.row_order').val()))  ? 1 : -1;
            });
            sortableList.append(listitems);

        }


    </script>

    </body>
    </html>
