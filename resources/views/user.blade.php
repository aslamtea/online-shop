<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>

    <link rel="stylesheet" href="{{asset('admin')}}/vendor/fontawesome-free-5.12.1-web/css/all.css">
    <link rel="stylesheet" href="{{asset('admin')}}/vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('admin')}}/css/my.css">
    @livewireStyles
    <script src="{{asset('admin')}}/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('admin')}}/vendor/bootstrap/js/bootstrap.js"></script>
    <script src="{{mix('js/app.js')}}"></script>
    @livewireScripts
</head>

<body style="background-color: #181824">
    <livewire:user.tempat.navbar />

    <div class="row justify-content-center no-gutters">
            @yield('content')
    </div>
    <livewire:user.produk.pesan/>
    <livewire:user.tempat.pesan />
    <footer class="p-5 text-white mt-lg-5 shadow-lg border-top">
        <div class="row">
            <div class="col-md-3">
                <h5 class="font-weight">Layanan Pelanggan</h5>
                <ul>
                    <li>Pusat Bantusan</li>
                    <li>Cara Pembelian</li>
                    <li>Pengiriman</li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5 class="font-weight">Tentang Kami</h5>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur, sed perspiciatis. Harum
                    molestias odit illum modi dolore vel molestiae laborum officia! Blanditiis tempora modi quia cumque
                    non corrupti exercitationem corporis.</p>
            </div>
            <div class="col-md-3">
                <h5 class="font-weight">mitra Kerjasama</h5>
                <ul>
                    <li>Bootstrap</li>
                    <li>jquery</li>
                    <li>Laravel</li>
                    <li>Laravel Livewire</li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5 class="font-weight">Hubungi kami</h5>
                <ul>
                    <li>0952315325</li>
                    <li>aslamtea@gmail</li>
                </ul>
            </div>
        </div>
    </footer>
    <div class="copright  text-center shadow bg-light p-3">
        <p>Aslam Tea <i class="far fa-copyright"></i>2020</p>
    </div>
</body>

</html>
