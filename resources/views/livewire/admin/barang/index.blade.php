<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-12">
            <livewire:admin.tempat.pesan/>
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Barang</h4>
                </div>
                <div class="row">
                    <div class="col m-3">
                        <a href="/admin/barang/create" data-turbolinks-action="replace" class="btn  btn-primary">Create</a>
                    </div>
                    <div class="col m-3">
                        <input type="text" wire:model="cari" class="form-control form-control-user" placeholder="Cari Barang">
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-md">
                        <thead class="thead-light">
                             <tr>
                                 <th scope="col">No</th>
                                 <th scope="col">judul</th>
                                 <th scope="col">Penulis</th>
                                 <th scope="col">Kategori</th>
                                 <th scope="col">Action</th>
                             </tr>
                        </thead>
                        <tbody>
                            <?php $no = 0;?>
                            @foreach ($barangs as $barang)
                            <?php $no++;?>
                            <tr>
                                 <th scope="row">{{$no}}</th>
                                 <td>{{$barang->name}}</td>
                                 <td>{{$barang->user->name}}</td>
                                 <td>{{$barang->kategori->name}}</td>
                                 <td>
                                    <a href="/admin/barang/update/{{$barang->id}}" data-turbolinks-action="replace" class="btn btn-sm btn-info text-white">Edit</a href="/admin/barang/edit/{{$barang->id}}">
                                    @if ($hilang == $barang->id)
                                    <button wire:click="destroy({{$barang->id}})" class="btn btn-sm btn-danger text-white ">Anda Yakin</button>
                                    @else
                                    <button wire:click="hilangkan({{$barang->id}})" class="btn btn-sm btn-danger text-white ">Delete</button>
                                    @endif
                                 </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$barangs->links()}}
                </div>
            </div>
        </div>
    </div>
</div>

