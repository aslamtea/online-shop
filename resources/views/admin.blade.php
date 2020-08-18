<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{$title}}</title>
  <link rel="stylesheet" href="{{asset('admin')}}/vendor/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="{{asset('admin')}}/css/at.css">
  <link rel="stylesheet" href="{{asset('admin')}}/vendor/fontawesome-free-5.12.1-web/css/all.css">
  @livewireStyles
  <script src="{{asset('admin')}}/vendor/jquery/jquery.min.js"></script>
  <script src="{{mix('js/app.js')}}"></script>
  @livewireScripts
</head>

<body>

  <div class="kabeh">
      <livewire:admin.tempat.navbar />

      <div class="bungkus">
          <livewire:admin.tempat.sidebar/>
            <section class="konten">
                <div class="inner">
                  @yield('content')
                </div>
            </section>
      </div>

      <livewire:admin.tempat.keluar/>
    </div>
</body>

</html>
