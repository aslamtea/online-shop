<div class="col-lg-11 mt-5">
    <div class="row mb-5 mt-3">
        <div class="col-12">
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <h3>Pesanan Sukses Di Pesan</h3>
                        <h5>
                            Silahkan Lanjutkan Dengan Pembayaran Ke rekening <strong>Bank BRI Dengan No Rekening : 3445.5325.6666 </strong> Dengan Nominal Pembayaran <Strong>Rp. {{number_format($pesanan->jumlah_harga)}} </Strong>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 mb-5 mt-5">
            <div class="row">
                <div class="col-md-7">
                    <div class="p-2  border">
                        <h2 class="h3 mb-3 text-white ml-3">Detail Order</h2>
                        <table class="table  mb-5">
                            <tbody>
                                <tr>
                                    <td class="text-white font-weight-bold"><strong>Nama</strong></td>
                                    <td class="text-white font-weight-bold"><strong>{{$pesanan->pembeli->name}}</strong></td>
                                </tr>
                                <tr>
                                    <td class="text-white font-weight-bold"><strong>Nama Lengkap</strong></td>
                                    <td class="text-white font-weight-bold"><strong>{{$pesanan->nama_lengkap}}</strong></td>
                                </tr>
                                <tr>
                                    <td class="text-white font-weight-bold"><strong>No Telepon</strong></td>
                                    <td class="text-white font-weight-bold"><strong>{{$pesanan->no_telepon}}</strong></td>
                                </tr>
                                <tr>
                                    <td class="text-white font-weight-bold"><strong>No Rekening</strong></td>
                                    <td class="text-white font-weight-bold"><strong>{{$pesanan->no_rekening}}</strong></td>
                                </tr>
                                <tr>
                                    <td class="text-white font-weight-bold"><strong>Bank</strong></td>
                                    <td class="text-white font-weight-bold"><strong>{{$pesanan->Bank}}</strong></td>
                                </tr>
                                <tr>
                                    <td class="text-white font-weight-bold"><strong>Pemilik Rekening</strong></td>
                                    <td class="text-white font-weight-bold"><strong>{{$pesanan->Pemilik_rekening}}</strong></td>
                                </tr>
                            </tbody>
                        </table>
                        <table>
                            <tbody  class="table  mb-5">
                                <tr>
                                    <td class="text-white font-weight-bold"><strong>Alamat</strong></td>
                                    <td class="text-white font-weight-bold"><strong>{{$pesanan->alamat}}</strong></td>
                                </tr>
                                <tr>
                                    <td class="text-white font-weight-bold"><strong>Keterangan Pesanan</strong></td>
                                    <td class="text-white font-weight-bold"><strong>{{$pesanan->keterangan}}</strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="p-2  border">
                        <h2 class="h3 mb-3 text-white ml-3">Your Order</h2>
                        <table class="table  mb-5">
                            <tbody>
                                <tr>
                                    <td class="text-white font-weight-bold"><strong>total Pesanan</strong></td>
                                    <td class="text-white font-weight-bold"><strong>Rp. {{number_format($pesanan->jumlah)}}</strong></td>
                                </tr>
                                <tr>
                                    <td class="text-white font-weight-bold"><strong>Diskon</strong></td>
                                    <td class="text-white font-weight-bold"><strong>Rp. {{number_format($pesanan->diskon)}}</strong></td>
                                </tr>
                                <tr>
                                    <td class="text-white font-weight-bold"><strong>Ongkir</strong></td>
                                    <td class="text-white font-weight-bold"><strong>Rp. {{number_format($pesanan->ongkir)}}</strong></td>
                                </tr>
                                <tr>
                                    <td class="text-white font-weight-bold"><strong>Waktu Kirim</strong></td>
                                    <td class="text-white font-weight-bold"><strong>{{$pesanan->waktu_kirim}} Hari</strong></td>
                                </tr>
                                <tr>
                                    <td class="text-white font-weight-bold"><strong>Tujuan</strong></td>
                                    <td class="text-white font-weight-bold"><strong> {{$pesanan->tujuan}}</strong></td>
                                </tr>
                                <tr>
                                    <td class="text-white font-weight-bold"><strong>Kurir</strong></td>
                                    <td class="text-white font-weight-bold"><strong> {{$pesanan->kurir}}</strong></td>
                                </tr>
                                <tr>
                                    <td class="text-white font-weight-bold"><strong>Jumlah Harga</strong></td>
                                    <td class="text-white font-weight-bold"><strong>Rp. {{number_format($pesanan->jumlah_harga)}}</strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-12 mt-5">
            <div class="row justify-content-center mb-3">
                <h4 class="text-white">Pesanan Detail Anda</h4>
            </div>
            <div class="container">
                <table class="table table-sm">
                    <thead>
                        <tr class="">
                            <th class="text-white" style="text-white width: 100px">Gambar</th>
                            <th class="text-white text-center">Nama</th>
                            <th class="text-white text-center">Harga Produk</th>
                            <th class="text-white text-center">Total Berat</th>
                            <th class="text-white text-center">Jumlah Pesanan</th>
                            <th class="text-white text-center">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($details as $detail)
                        <tr class="">
                            <td style="width: 100px" class="p-1">
                                <img src="{{asset('storage/'.$detail->barang->gambar) }}" alt="Image" class="img-fluid">
                            </td>
                            <td class="text-center">
                                <h6 class=" text-white">{{$detail->barang->name}}</h6>
                            </td>
                            <td class="text-white text-center">Rp. {{number_format($detail->barang->harga)}}</td>
                            <td class="text-white text-center">{{$detail->total_berat}}</td>
                            <td class="text-white text-center">{{$detail->jumlah}}</td>
                            <td class="text-white text-center">Rp. {{number_format($detail->jumlah_harga)}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
