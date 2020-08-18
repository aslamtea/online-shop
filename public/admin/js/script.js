$(".menu li > a").click(function (e) {
    $(".menu ul ul").slideUp(), $(this).next().is(":visible") || $(this).next().slideDown(), e.stopPropagation()
})

$(window).bind("load resize", function () {
    if ($(this).width() < 768) {
        $(".gigir-colap").addClass("ucing")
        $(".gigir-colap").slideUp()
    } else {
        $(".gigir-colap").removeClass("ucing")
        $(".gigir-colap").slideDown()
    }
})
$("button.teing").click(function () {
    $(".gigir-colap").slideToggle('normal')
})
$("a.luhur").click(function () {
    $(".ko").slideToggle('normal')
})
$(document).ready(function () {
    $(".lihat-modal").click(function () {
        $("#modal-box").slideDown(500)
        $("#background").fadeIn(500)
        $(".tukang").fadeIn(500)
    })
    $(".keluar").click(function () {
        $("#modal-box").slideUp(500)
        $("#background").fadeOut(500)
        $(".tukang").fadeOut(500)
    })
})
