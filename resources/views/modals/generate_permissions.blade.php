{{--               Modal window Выйти--}}
<form role="form" action="" method="POST">
    <div class="modal fade modal-danger modal-relationships" id="new_relationship_modal">
        <div class="modal-dialog relationship-panel">
            <div class="model-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">&times;</button>
                    <h4 class="modal-title"><i class="voyager-heart"></i> Category
                        Отношения </h4>
                </div>
                <div class="modal-body">
                    <div class="row">

                    </div>
                </div>
                <div class="modal-footer">
                    <div class="relationship-btn-container">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
                        <button class="btn btn-danger btn-relationship"><i class="voyager-plus"></i> <span>Добавить новое отношение</span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" value="4" name="data_type_id">
{{--    <input type="hidden" name="_token" value="xr2FaAiTyiz2XZRBwTa9RnU8nxb6qdN6R7l1I9iN">--}}
    {{ csrf_field() }}
</form>

<script>

    /********** Relationship functionality **********/

    $(function () {
        $('.relationship_type').change(function(){
            if($(this).val() == 'belongsTo'){
                $(this).parent().parent().find('.relationshipField').show();
                $(this).parent().parent().find('.relationshipPivot').hide();
                $(this).parent().parent().find('.relationship_taggable').hide();
                $(this).parent().parent().find('.hasOneMany').removeClass('flexed');
                $(this).parent().parent().find('.belongsTo').addClass('flexed');
            } else if($(this).val() == 'hasOne' || $(this).val() == 'hasMany'){
                $(this).parent().parent().find('.relationshipField').show();
                $(this).parent().parent().find('.relationshipPivot').hide();
                $(this).parent().parent().find('.relationship_taggable').hide();
                $(this).parent().parent().find('.hasOneMany').addClass('flexed');
                $(this).parent().parent().find('.belongsTo').removeClass('flexed');
            } else {
                $(this).parent().parent().find('.relationshipField').hide();
                $(this).parent().parent().find('.relationshipPivot').css('display', 'flex');
                $(this).parent().parent().find('.relationship_taggable').show();
            }
        });

        $('.btn-new-relationship').click(function(){
            // Update table data
            $('#new_relationship_modal .relationship_table').trigger('change');

            $('#new_relationship_modal').modal('show');
        });

        relationshipTextDataBinding();

        $('.relationship_table').on('change', function(){
            populateRowsFromTable($(this));
        });

        $('.voyager-relationship-details-btn').click(function(){
            $(this).toggleClass('open');
            if($(this).hasClass('open')){
                $(this).parent().parent().find('.voyager-relationship-details').slideDown();
                populateRowsFromTable($(this).parent().parent().find('select.relationship_table'));
            } else {
                $(this).parent().parent().find('.voyager-relationship-details').slideUp();
            }
        });

    });

    function populateRowsFromTable(dropdown){
        var tbl = dropdown.val();

        $.get('http://simpatik/admin/database/' + tbl, function(data){
            var tbl_selected = $(dropdown).val();

            $(dropdown).parent().parent().find('.rowDrop').each(function(){
                var selected_value = $(this).data('selected');

                var options = $.map(data, function (obj, key) {
                    return {id: key, text: key};
                });

                $(this).empty().select2({
                    data: options
                });

                if (selected_value == '' || !$(this).find("option[value='"+selected_value+"']").length) {
                    selected_value = $(this).find("option:first-child").val();
                }

                $(this).val(selected_value).trigger('change');
            });
        });
    }

    function relationshipTextDataBinding(){
        $('.relationship_display_name').bind('input', function() {
            $(this).parent().parent().parent().find('.label_relationship p').text($(this).val());
        });
        $('.relationship_table').on('change', function(){
            var tbl_selected_text = $(this).find('option:selected').text();
            $(this).parent().parent().find('.label_table_name').text(tbl_selected_text);
        });
        $('.relationship_table').each(function(){
            var tbl_selected_text = $(this).find('option:selected').text();
            $(this).parent().parent().find('.label_table_name').text(tbl_selected_text);
        });
    }

    /********** End Relationship Functionality **********/
</script>
