$(document).ready(function () {
    $("#tombol").click(function () {
        $("#modal-box").slideDown(500)
        $("#background").fadeIn(500)
    })
    $("#close-button").click(function () {
        $("#modal-box").slideUp(500)
        $("#background").fadeOut(500)
    })
})