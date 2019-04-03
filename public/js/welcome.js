function toggleName() {
    if($('#customCheck').is(":checked")) {
        $('#name').val('');
        $('#name').attr('disabled', true);
        $('#name').attr('required', false);
    }
    else {
        $('#name').attr('disabled', false);
        $('#name').attr('required', true);
    }
}

window.onload = toggleName;
