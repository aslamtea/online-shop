<div class="col-lg-12 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-5">
                <div class="row mb-5">
                    <div class="col-md-12">
                        <div class="p-3  border">
                            <h2 class="h3 mb-3 text-white ml-3">Your Order</h2>
                            <table class="table  mb-5">
                                <thead>
                                    <th class="text-white">Product</th>
                                    <th class="text-white">Total</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-white font-weight-bold"><strong>total Keranjang</strong></td>
                                        <td class="text-white font-weight-bold"><strong>Rp. {{number_format($keranjang->jumlah_harga)}}</strong></td>
                                    </tr>
                                    @if (session()->has('ongkir'))
                                        @if (session()->has('code'))
                                            <tr>
                                                <td class="text-white"><strong>Berat Total</strong></td>
                                                <td class="text-white">{{number_format($keranjang->jumlah_berat)}} Gram</td>
                                            </tr>
                                            <tr>
                                                <td class="text-white font-weight-bold"><strong>Diskon</strong></td>
                                                <td class="text-white"> {{session()->get('persen')}}%</td>
                                            </tr>
                                            <tr>
                                                <td class="text-white font-weight-bold"><strong>Potongan</strong></td>
                                                <td class="text-white"> {{number_format(session()->get('diskon'))}}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-white font-weight-bold"><strong>Total</strong></td>
                                                <td class="text-white"> {{number_format(session()->get('total'))}}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-white font-weight-bold"><strong>Ongkir</strong></td>
                                                <td class="text-white">Rp. {{number_format(session()->get('ongkir'))}}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-white font-weight-bold"><strong>Waktu Pengiriman</strong></td>
                                                <td class="text-white">{{session()->get('hari')}} Hari</td>
                                            </tr>
                                            <tr>
                                                <td class="text-white font-weight-bold"><strong>Kurir Pengiriman</strong></td>
                                                <td class="text-white">{{session()->get('courier')}}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-white font-weight-bold"><strong>Tujuan Pengiriman</strong></td>
                                                <td class="text-white">{{$cities->city_name}}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-white font-weight-bold"><strong>total Biaya</strong></td>
                                                <td class="text-white font-weight-bold"><strong>Rp.{{number_format(session()->get('ongkir') + session()->get('total'))}}</strong></td>
                                            </tr>
                                        @else
                                            <tr>
                                                <td class="text-white"><strong>Berat Total</strong></td>
                                                <td class="text-white">{{number_format($keranjang->jumlah_berat)}} Gram</td>
                                            </tr>
                                            <tr>
                                                <td class="text-white font-weight-bold"><strong>Diskon</strong></td>
                                                <td class="text-white">0%</td>
                                            </tr>
                                            <tr>
                                                <td class="text-white font-weight-bold"><strong>Ongkir</strong></td>
                                                <td class="text-white">Rp. {{number_format(session()->get('ongkir'))}}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-white font-weight-bold"><strong>Waktu Pengiriman</strong></td>
                                                <td class="text-white">{{session()->get('hari')}} Hari</td>
                                            </tr>
                                            <tr>
                                                <td class="text-white font-weight-bold"><strong>Kurir Pengiriman</strong></td>
                                                <td class="text-white">{{session()->get('courier')}}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-white font-weight-bold"><strong>Tujuan Pengiriman</strong></td>
                                                <td class="text-white">{{$cities->city_name}}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-white font-weight-bold"><strong>total Biaya</strong></td>
                                                <td class="text-white font-weight-bold"><strong>Rp. {{number_format(session()->get('ongkir') + $keranjang->jumlah_harga)}}</strong></td>
                                            </tr>
                                        @endif
                                    @else
                                        <tr>
                                            <td class="text-white"><strong>Berat Total</strong></td>
                                            <td class="text-white">{{number_format($keranjang->jumlah_berat)}} Gram</td>
                                        </tr>
                                        <tr>
                                            <td class="text-white font-weight-bold"><strong>Diskon</strong></td>
                                            <td class="text-white">0%</td>
                                        </tr>
                                        <tr>
                                            <td class="text-white font-weight-bold"><strong>total Biaya</strong></td>
                                            <td class="text-white font-weight-bold"><strong>Rp. {{number_format($keranjang->jumlah_harga)}}</strong></td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-5 mb-md-0 ml-auto">
                <livewire:user.cekout.kupon/>
                <h2 class="h3 mb-3 text-white">Pemesanan Detail</h2>
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        <div class="row justify-content-center">
                            {{session('success')}}
                        </div>
                    </div>
                @endif
                @if (session()->has('gagal'))
                    <div class="alert alert-danger">
                        <div class="row justify-content-center">
                            {{session('gagal')}}
                        </div>
                    </div>
                @endif
                <div class="row p-2">
                    <div class="col-12 mb-3 row justify-content-center">
                        <div class="container">
                            <div  class="btn btn-outline-light btn-block font-weight-bold" wire:click="ongkir">
                                Pilih Tempat Pengiriman
                            </div>
                        </div>
                    </div>
                    <form wire:submit.prevent="pesan">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <label class="text-white" for="nama_lengkap">Nama Lengkap</label>
                                <input type="text" wire:model="nama_lengkap" class="form-control @error('nama_lengkap') is-invalid @enderror">
                                @error('nama_lengkap')
                                    <div class="invalid-feedback ml-3">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12 mb-3">
                                <label class="text-white" for="alamat">Alaman Lengkap <span>*</span></label>
                                <textarea  wire:model="alamat"  rows="3" class="form-control @error('alamat') is-invalid @enderror"></textarea>
                                @error('alamat')
                                    <div class="invalid-feedback ml-3">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="text-white" for="no_telepon">No Telepon</label>
                                <input type="text" wire:model="no_telepon"  class="form-control @error('no_telepon') is-invalid @enderror" >
                                @error('no_telepon')
                                    <div class="invalid-feedback ml-3">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="text-white" for="last_name">Bank <span>*</span></label>
                                <input type="text" wire:model="bank"  class="form-control @error('bank') is-invalid @enderror">
                                @error('bank')
                                    <div class="invalid-feedback ml-3">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="text-white" for="first_name">No Rekening  <span>*</span></label>
                                <input type="text" wire:model="no_rekening"  class="form-control @error('no_rekening') is-invalid @enderror">
                                @error('no_rekening')
                                    <div class="invalid-feedback ml-3">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="text-white" for="last_name">Pemilik Rekening<span>*</span></label>
                                <input type="text" wire:model="pemilik_rekening"  class="form-control @error('pemilik_rekening') is-invalid @enderror">
                                @error('pemilik_rekening')
                                    <div class="invalid-feedback ml-3">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12 mb-3">
                                <label class="text-white" for="ketarangan">keterangan <span>*</span></label>
                                <textarea type="text" wire:model="keterangan"  class="form-control"></textarea>
                            </div>
                            @if ($oke)
                                <div class="col-12 mb-3 mt-5">
                                    <button class="btn btn-light btn-lg py-3 btn-block font-weight-bold" >Anda Yakin </button>
                                </div>
                            @else
                                <div class="col-12 mb-3 mt-5">
                                    <div class="btn btn-outline-light btn-lg py-3 btn-block font-weight-bold" wire:click="oke">Pesan Produk </div>
                                </div>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<livewire:user.cekout.ongkir/>
