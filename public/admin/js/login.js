$(document).ready(function () {
    $("#checkbox").click(function () {
        if ($(this).is(":checked")) {
            $("#lihatPassword").attr('type', 'text')
        } else {
            $("#lihatPassword").attr('type', 'password')
        }
    })
})