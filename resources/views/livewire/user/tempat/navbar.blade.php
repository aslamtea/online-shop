

<nav class="navbar navbar-light navbar-expand-lg  p-3">
    <div class="container">
        <div class="container">
            <h3 class="lengit">
                <i class="fas fa-cart-plus text-white mr-2"></i>
                <a class="navbar-brand text-white font-weight-bold" href="#">Aslam Tea Shop</a>
            </h3>

        <div class=" font-weight-bold text-white ml-auto mr-2">
            @if (session()->has('email'))
            <div style="cursor: pointer" class="text-white mr-2" wire:click="keluar">Logout</div>
            @else
            <a data-turbolinks-action="replace" href="/user/login" class="text-white">Login</a><span class="mr-2 ml-3">/</span>
            <a data-turbolinks-action="replace" href="/user/register" class="text-white">Register</a>
            @endif
        </div>
        <livewire:user.home.cari/>
    </div>
</nav>

<nav class="navbar navbar-expand-lg navbar-light bg-light shadow p-3">
    <div class="container">
        <h3 class="eweh">
            <i class="fas fa-cart-plus  mr-2"></i>
            <a class="navbar-brand  font-weight-bold" href="#">Aslam</a>
        </h3>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  mr-3">
                <li class="nav-item">
                    <a class="nav-link  font-weight-bold" style="color: #181824"   data-turbolinks-action="replace" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  font-weight-bold" style="color: #181824"   data-turbolinks-action="replace" href="/user/produk">Produk <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  font-weight-bold" style="color: #181824"   data-turbolinks-action="replace" href="#">Hubungi Kami <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  font-weight-bold" style="color: #181824"   data-turbolinks-action="replace" href="#"> Bantuan<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
        <div class="icon mt-2 ml-auto">
            <h6>
                <a data-turbolinks-action="replace" href="/user/akun">
                    <i class="fas fa-lg  fa-user mr-4" style="color: #181824" data-toggle="tooltip" title="akun Anda"></i>
                </a>
                <a data-turbolinks-action="replace" href="/user/cekout">
                    <i class="fas fa-lg  fa-cart-plus mr-4" style="color: #181824" data-toggle="tooltip"
                        title="Keranjang Belanja"></i>
                </a>
                <a data-turbolinks-action="replace" href="/user/pesanan">
                    <i class="fas fa-lg fa-credit-card mr-4" style="color: #181824" data-toggle="tooltip" title="Transaksi Anda "></i>
                </a>
            </h6>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    </div>
</nav>

<div class="p-3 shadow">
    <div class="row justify-content-center">
        <h5 class="text-white">Dapatkan Diskon Terbaik Untuk Hari Ini</h5>
    </div>
</div>

