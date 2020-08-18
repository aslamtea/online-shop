<div class="col-md-12">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{asset('img/slider-2.jpg')}}" class="d-block w-100"  alt="...">
            <div class="carousel-caption d-none d-md-block">
                <div class="border rounded-pill" style="background: rgba(0, 0, 0, 0.3)">
                    <h1 class="font-weight-bold text-white bg-gradient-primary">Belanja Murah dengan Banyak Diskon</h1>
                    <h1 class="font-weight-bold text-white bg-gradient-primary">Kalian Tidak Akan Kecewa</h1>
                </div>
                <div class="pt-5 pb-5"></div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{asset('img/slider-1.jpg')}}" class="d-block w-100"  alt="...">
            <div class="carousel-caption d-none d-md-block">
                <div class="border rounded-pill" style="background: rgba(0, 0, 0, 0.3)">
                    <h1 class="font-weight-bold text-white bg-gradient-primary ">Beli Barang Dengan Kupon</h1>
                    <h1 class="font-weight-bold text-white bg-gradient-primary">dan Dapatkan Hal Yg Gratis</h1>
                </div>
                <div class="pt-5 pb-5"></div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{asset('img/slider-3.jpg')}}" class="d-block w-100"  alt="...">
            <div class="carousel-caption d-none d-md-block">
                <div class="border rounded-pill" style="background: rgba(0, 0, 0, 0.3)">
                    <h1 class="font-weight-bold text-white bg-gradient-primary ">Kami Siap Melayani Anda</h1>
                    <h1 class="font-weight-bold text-white bg-gradient-primary">Sepenuh Hati</h1>
                </div>
                <div class="pt-5 pb-5"></div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12 mb-3">
                <div class="row justify-content-center">
                    <h3 class=" font-weight-bold m-4 text-white">Produk Kami</h3>
                </div>
            </div>
        @foreach ($barangs as $barang)
            <div class="col-md-3 mt-1" style="width: 13rem">
                <div class="card m-1 gg" style="background-color: #181824">
                    <img src="{{asset('storage/'.$barang->gambar) }}" class="card-img-top" alt="...">
                    <div class="card-header">
                        <h5 class="text-white card-title">{{$barang->name}}</h5>
                        <p class="text-white card-text">Harga <span>Rp {{number_format($barang->harga)}}</span></p>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star-half-alt text-warning"></i>
                        <i class="far fa-star text-warning"></i><br>
                        <a href="/user/produk/{{$barang->slug}}" data-turbolinks-action="replace" class="btn-outline-light  btn btn-block">lihat</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
