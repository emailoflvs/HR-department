<div class="modal relationship fade" tabindex="-1" id="call_place_exit_modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">


                    <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">
                        <i class="voyager-plus"></i>
                        Вы действительно хотите выйти?
                    </h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <form name="working" action="/working" method="POST">
                        {{--                        <input type="hidden" name="working_status" value="1">--}}
                        <input type="hidden" name="working_status" value="0">
                        {{ csrf_field() }}

                        <h5 class="modal-title">Причина выхода:</h5>

                    <select name="out-reason" class="form-control input-sm" id="out-reason">
                        @php
                            use App\WorkingStatus;
                            foreach (WorkingStatus::where ('type','=',0)->get() as $item)
                                echo "<option value='".$item->getAttributes()['id']."'>".$item->getAttributes()['name']."</option>";
                        @endphp
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-success pull-right"
                       value="Выйти">
                {{--                <form action="#" id="delete_form" method="POST">--}}
                {{--                    <input type="hidden" name="_method" value="DELETE">--}}
                {{--                    <input type="hidden" name="_token"--}}
                {{--                           value="xr2FaAiTyiz2XZRBwTa9RnU8nxb6qdN6R7l1I9iN">--}}
                {{--                    <input type="submit" class="btn btn-danger pull-right delete-confirm"--}}
                {{--                           value="Да, удалить!">--}}

                <button type="button" class="btn btn-default pull-right" data-dismiss="modal">
                    Отмена
                </button>
                </form>
            </div>
            {{--        </div>--}}
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


{{--<div class="modal modal-success fade" tabindex="-1" id="place-out_modal" role="dialog">--}}
{{--    <div class="modal-dialog">--}}
{{--        <form name="working" class="modal-content" action="/working" id="place-out_form" method="POST">--}}
{{--            <div class="modal-header">--}}
{{--                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span--}}
{{--                        aria-hidden="true">&times;</span></button>--}}
{{--                <h4 class="modal-title"><i class="voyager-plus"></i>Причина выхода</h4>--}}
{{--            </div>--}}
{{--            <div class="modal-body">--}}
{{--                <div class="form-group">--}}
{{--                    <br>--}}
{{--                                                        <label for="name">Причина выхода</label>--}}
{{--                    <select name="out-reason" class="form-control input-sm" id="out-reason">--}}
{{--                        @php--}}
{{--                            use App\WorkingStatus;--}}
{{--                            foreach (WorkingStatus::where ('type','=',0)->get() as $item)--}}
{{--                                echo "<option value='".$item->getAttributes()['id']."'>".$item->getAttributes()['name']."</option>";--}}
{{--                        @endphp--}}
{{--                    </select>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="modal-footer">--}}
{{--                {{ csrf_field() }}--}}
{{--                <input type="submit" class="btn btn-success pull-right"--}}
{{--                       value="Выйти">--}}
{{--                <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Отмена</button>--}}
{{--            </div>--}}
{{--            <input type="hidden" name="working_status" value="0">--}}
{{--        </form><!-- /.modal-content -->--}}
{{--    </div><!-- /.modal-dialog -->--}}
{{--</div><!-- /.modal -->--}}


{{--Скрипт нужно размещать внизу страницы--}}

{{--<script>--}}
{{--    $('span').on('click', '.call_place_exit', function (e) {--}}
{{--        $('#delete_form')[0].action = 'http://simpatik/admin/users/__id'.replace('__id', $(this).data('id'));--}}
{{--        $('#call_place_exit_modal').modal('show');--}}
{{--    });--}}
{{--</script>--}}
