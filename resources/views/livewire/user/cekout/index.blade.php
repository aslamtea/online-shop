
<div class="col-lg-10">
    <div class="mt-5">
        <div class="row  mb-5">
            <div class="col-md-12 mb-5">
                <h3 class="text-center text-white">Keranjang Anda</h3>
            </div>
            <div class="col-md-12">
                @if (session()->has('gagal'))
                <div class="alert alert-danger">
                    <div class="row justify-content-center">
                        {{session('gagal')}}
                    </div>
                </div>
                @endif
                <div class="site-blocks-table">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-white" style="text-white width: 150px">Gambar</th>
                                <th class="text-white text-center">Nama</th>
                                <th class="text-white text-center">Harga Produk</th>
                                <th class="text-white text-center">Jumlah Pesanan</th>
                                <th class="text-white text-center">Total</th>
                                <th class="text-white text-center">Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($keranjang_details as $detail)
                            <tr>
                                <td style="width: 150px" class="p-1">
                                <img src="{{asset('storage/'.$detail->barang->gambar) }}" alt="Image" class="img-fluid">
                                </td>
                                <td class="text-center">
                                <h6 class=" text-white font-weight-bold">{{$detail->barang->name}}</h6>
                                </td>
                                <td class="text-white">Rp. {{number_format($detail->barang->harga)}}</td>
                                    <livewire:user.cekout.update :detail="$detail" :key="$detail->id">
                                <td class="text-white">Rp. {{number_format($detail->jumlah_harga)}}</td>
                                @if ($hilang == $detail->id)
                                <td><button class="font-weight-bold btn btn-outline-light" wire:click="destroy({{$detail->id}})">Anda Yakin ?</button></td>
                                @else
                                <td><button class="font-weight-bold btn btn-outline-light btn-sm" wire:click="hapus({{$detail->id}})">Hapus</button></td>
                                @endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="row mb-5">
                    <div class="col-md-6">
                    <a data-turbolinks-action="replace" href="/user/produk" class="btn btn-outline-light font-weight-bold  btn-block">Continue Shopping</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 pl-5">
                <div class="row justify-content-end">
                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-md-12 text-right border-bottom mb-5">
                            <h3 class="text-white h4 text-uppercase">Keranjang Total</h3>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-md-6">
                            <span class="text-white font-weight-bold">Total Harga</span>
                            </div>
                            <div class="col-md-6 text-right">
                            <strong class="text-white font-weight-bold">Rp. {{number_format($keranjangs->jumlah_harga)}}</strong>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a class="btn btn-outline-light btn-lg py-3 btn-block font-weight-bold" data-turbolinks-action="replace" href="/user/cekout/pesanan">Proceed To Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
