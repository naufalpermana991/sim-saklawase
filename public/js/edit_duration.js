$(document).ready(function() {
    // on change of input field, update the value of duration
    $("[name='duration']").change(function() {
        $("#edit_duration").val($(this).val());
    });
});