$(function() {
    CKEDITOR.replace('txtDetail');
    $('.textarea').wysihtml5();
})
$(document).ready(function() {
    $('#lstIDCategory').change(function() {
        idCategory = $(this).val();
        $.get('admin/ajax/type-product/' + idCategory, function(data) {
            $('#lstIDType').html(data);
        });
    });

    $('#btnAddImage').click(function() {
        $('#divImage').append(
            '<div class="form-group"><input type="file" id="filImage[]" name="filImage[]" required="">{{-- <p class="help-block">Example block-level help text here.</p> --}}</div>'
        );
    });
});