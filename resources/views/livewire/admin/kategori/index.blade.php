<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <livewire:admin.tempat.pesan />
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Kategori</h4>
                </div>
                <div class="card-body">
                    <livewire:admin.kategori.create>
                    <hr>
                    @if ($statusUpdate)
                    <livewire:admin.kategori.update>
                    <hr>
                    @endif
                    <table class="table table-striped">
                        <thead class="thead-dark">
                             <tr>
                                 <th scope="col">No</th>
                                 <th scope="col">Pembuat Kategori</th>
                                 <th scope="col">Name</th>
                                 <th scope="col">edit</th>
                                 <th scope="col">hapus</th>
                             </tr>
                        </thead>
                        <tbody class="table-sm">
                            <?php $no = 0;?>
                            @foreach ($kategoris as $kategori)
                            <?php $no++;?>
                            <tr>
                                 <th scope="row">{{$no}}</th>
                                 <td>{{$kategori->user->name}}</td>
                                 <td>{{$kategori->name}}</td>
                                 <td>
                                    <button wire:click="getKategori({{$kategori->id}})" class="btn btn-sm btn-info text-white">Edit</button>
                                </td>
                                <td>
                                    @if ($hilang == $kategori->id)
                                    <button wire:click="destroy({{$kategori->id}})" class="btn btn-sm btn-danger text-white ">Anda Yakin</button>
                                    @else
                                    <button wire:click="hilangkan({{$kategori->id}})" class="btn btn-sm btn-danger text-white ">Delete</button>
                                    @endif
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

