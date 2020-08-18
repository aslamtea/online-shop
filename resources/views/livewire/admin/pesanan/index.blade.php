<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-12">
            <livewire:admin.tempat.pesan />
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Pesanan</h4>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-light">
                             <tr>
                                 <th scope="col">No</th>
                                 <th scope="col">Name</th>
                                 <th scope="col">Email</th>
                                 <th scope="col">Jumlah Harga</th>
                                 <th scope="col">Action</th>
                             </tr>
                        </thead>
                        <tbody>
                            <?php $no = 0;?>
                            @foreach ($pesanans as $pesanan)
                            <?php $no++;?>
                            <tr>
                                 <th scope="row">{{$no}}</th>
                                 <td>{{$pesanan->pembeli->name}}</td>
                                 <td>{{$pesanan->pembeli->email}}</td>
                                 <td>Rp. {{number_format($pesanan->jumlah_harga)}}</td>
                                 <td>
                                    <a href="/admin/pesanan/{{$pesanan->id}}" data-turbolinks-action="replace" class="btn btn-sm btn-primary">Detail</a>
                                    <button  class="btn btn-sm btn-danger text-white">Delete</button>
                                 </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

