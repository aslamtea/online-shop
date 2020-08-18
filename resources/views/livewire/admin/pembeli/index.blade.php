<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-12">
            <livewire:admin.tempat.pesan />
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Pembeli</h4>
                </div>
                <div class="card-body">
                    <livewire:admin.pembeli.create>
                    <hr>
                    @if ($statusUpdate)
                    <livewire:admin.pembeli.update>
                    <hr>
                    @endif
                    <table class="table">
                        <thead class="thead-light">
                             <tr>
                                 <th scope="col">No</th>
                                 <th scope="col">Name</th>
                                 <th scope="col">Email</th>
                                 <th scope="col">Action</th>
                             </tr>
                        </thead>
                        <tbody>
                            <?php $no = 0;?>
                            @foreach ($pembelis as $pembeli)
                            <?php $no++;?>
                            <tr>
                                 <th scope="row">{{$no}}</th>
                                 <td>{{$pembeli->name}}</td>
                                 <td>{{$pembeli->email}}</td>
                                 <td>
                                    <button wire:click="getMenu({{$pembeli->id}})" class="btn btn-sm btn-info text-white">Edit</button>
                                    <button wire:click="destroy({{$pembeli->id}})" class="btn btn-sm btn-danger text-white">Delete</button>
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

