<div class="row justify-content-center">
    <div class="col-md-9">
        <div class="row">
            <div class=" p-5">
                <div class="card" style="background-color: #181824">
                    <div class="card-body">
                        @if (session()->has('gagal'))
                        <div class="alert alert-danger">
                            <div class="row justify-content-center">
                                {{session('gagal')}}
                            </div>
                        </div>
                        @endif
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{asset('storage/'.$barang->gambar) }}" class="card-img-top" alt="...">
                            </div>
                            <div class="col-md-6 mt-3">
                                <table class="table table-borderless">
                                    <tr>
                                        <th class="text-white">Nama Produk</th>
                                        {{-- <td class="text-white">:</td> --}}
                                        <td class="text-white">{{$barang->name}}</td>
                                    </tr>
                                    <tr>
                                        <th class="text-white">Kategori Produk</th>
                                        {{-- <td class="text-white">:</td> --}}
                                        <td class="text-white">{{$barang->kategori->name}}</td>
                                    </tr>
                                    <tr>
                                        <th class="text-white">Harga Produk</th>
                                        {{-- <td class="text-white">:</td> --}}
                                        <td class="text-white">Rp {{number_format($barang->harga)}}</td>
                                    </tr>
                                    <tr>
                                        <th class="text-white">Stok Produk</th>
                                        {{-- <td class="text-white">:</td> --}}
                                        <td class="text-white">{{$barang->stok}}</td>
                                    </tr>
                                    <tr>
                                        <th class="text-white">Berat Produk</th>
                                        {{-- <td class="text-white">:</td> --}}
                                        <td class="text-white">{{$barang->berat}} Gram</td>
                                    </tr>
                                </table>
                                <div class="mt-4">
                                    <h6 class="text-white">Informasi Produk</h6>
                                    <p class="text-white p-3">{{$barang->isi}}</p>
                                </div>
                                <div class="ml-3">
                                    <livewire:user.produk.suka :barang="$barang" :key="$barang->id">
                                </div>
                                <livewire:user.produk.pesanan :barang="$barang" :key="$barang->id">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <livewire:user.produk.komentar :barang="$barang" :key="$barang->id">

        <div class="row justify-content-center">
            <h4 class="font-weight-bold m-4 text-white">Produk Kami</h4>
        </div>
        <div class="row">
            @foreach ($barangs as $bar)
            <div class="col-md-3 mt-1" style="width: 13rem">
                <div class="card m-1 gg" style="background-color: #181824">
                    <img src="{{asset('storage/'.$bar->gambar) }}" class="card-img-top" alt="...">
                    <div class="card-header">
                        <h5 class="card-title text-white">{{$bar->name}}</h5>
                        <p class="card-text text-white">Harga <span>Rp {{number_format($bar->harga)}}</span></p>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star-half-alt text-warning"></i>
                        <i class="far fa-star text-warning"></i><br>
                        <a href="/user/produk/{{$bar->slug}}" data-turbolinks-action="replace" class="btn btn-block btn-outline-light">lihat</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

