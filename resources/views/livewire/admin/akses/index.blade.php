<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-10">
            <livewire:admin.tempat.pesan />
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Akses</h4>
                </div>
                <div class="card-body">
                    <livewire:admin.akses.create>
                    <hr>
                    @if ($statusUpdate)
                    <livewire:admin.akses.update>
                    <hr>
                    @endif
                    <table class="table">
                        <thead class="thead-light">
                             <tr>
                                 <th scope="col">No</th>
                                 <th scope="col">role</th>
                                 <th scope="col">Menu Id</th>
                                 <th scope="col">Action</th>
                             </tr>
                        </thead>
                        <tbody>
                            <?php $no = 0;?>
                            @foreach ($akse as $akses)
                            <?php $no++;?>
                            <tr>
                                 <th scope="row">{{$no}}</th>
                                 <td>{{$akses->role}}</td>
                                 <td>{{$akses->menu->name}}</td>
                                 <td>
                                    <button wire:click="getAkses({{$akses->id}})" class="btn btn-sm btn-info text-white">Edit</button>
                                    <button wire:click="destroy({{$akses->id}})" class="btn btn-sm btn-danger text-white">Delete</button>
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

