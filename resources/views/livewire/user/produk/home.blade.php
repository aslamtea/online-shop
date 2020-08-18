<div class="col-md-10">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 mb-3">
                <nav class="navbar navbar-light">
                    <h4 class=" font-weight-bold m-4 text-white">Produk Kami</h4>
                    <form class="form-inline ml-auto">
                        <input class="form-control mr-sm-2 rounded-pill" wire:model="cari" type="search" placeholder="Cari Produk">
                    </form>
                </nav>
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
        <div class="container mt-4">
            <div class="row justify-content-center">
                <div class="text-center">
                    {{$barangs->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
