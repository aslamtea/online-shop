<aside class="gigir gigir-colap mb-5">
    <div class="menu">
      <ul class="menu-konten">
        <li class="nav-item nav-profile">
          <a href="#" class="nav-link">
            <div class="profile-image">
              <img class="img-xs rounded-circle img-thumbnail" src="{{auth()->user()->asaKau()}}" alt="profile image">
            </div>
            <div class="ml-1 mt-2">
              <p class="profile-name">{{auth()->user()->name}}</p>
              <p class="designation">{{auth()->user()->role}}</p>
            </div>
          </a>
        </li>
        @foreach ($ki as $menu)
            <li class="nav-item "><span class="text-success"> {{$menu->name}}</span></li>
            @foreach ($submenus as $submenu)
                @if ($menu->id == $submenu->menu_id)
                    <li  class="border-handap">
                    <a >
                        <span class="font-weight-bold"> {{$submenu->name}}</span><i class="{{$submenu->icon}} icon-submenu"></i>
                    </a>
                    <ul class="bg-light rounded" >
                        @foreach ($submenu->menu_url as $url)
                            @if ($submenu->id == $url->submenu_id)
                                <a class="hred " href="{{$url->url}}" data-turbolinks-action="replace">{{$url->name}}</a>
                            @endif
                        @endforeach
                    </ul>
                    </li>
                @endif
            @endforeach
        @endforeach
      </ul>
      <div class="pb-5 pt-5"></div>
      <div class="pb-5 pt-5"></div>
    </div>
</aside>

<script>
$(".menu li > a").click(function (e) {
    $(".menu ul ul").slideUp(), $(this).next().is(":visible") || $(this).next().slideDown(), e.stopPropagation()
})

</script>
