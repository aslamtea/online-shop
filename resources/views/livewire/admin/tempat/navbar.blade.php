<nav class="navbar navbar-expand-lg navbar-dark topbar shadow fixed-top">

    <h3 class="ml-5">
        <i class="fas fa-cart-plus text-white mr-2"></i>
        <a class="navbar-brand text-white font-weight-bold" href="#">Aslam Tea Shop</a>
    </h3>
    <div class=" float-md-right ml-auto">
      <a class="luhur btn">
        <span class="text-white mr-3">{{auth()->user()->name}}</span>
        <img src="{{auth()->user()->asaKau()}}" class="img-profile rounded-circle mr-3" alt="">
      </a>
      <div class="ko" >
        <a class="dropdown-item" href="/admin/profil">My Profil</a>
        <a class="dropdown-item " wire:click="keluar" >Keluar</a>
      </div>
    </div>
    <button class="teing navbar-toggler" type="button">
      <span class="navbar-toggler-icon"></span>
    </button>
</nav>

<script>
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
</script>


