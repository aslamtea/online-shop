<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-12">
            <livewire:admin.tempat.pesan />
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Admin</h4>
                </div>
                <div class="card-body">
                    <livewire:admin.admin.create>
                    <hr>
                    @if ($statusUpdate)
                    <livewire:admin.admin.update>
                    <hr>
                    @endif
                    <table class="table">
                        <thead class="thead-light">
                             <tr>
                                 <th scope="col">No</th>
                                 <th scope="col">Name</th>
                                 <th scope="col">Email</th>
                                 <th scope="col">Role</th>
                                 <th scope="col">Action</th>
                             </tr>
                        </thead>
                        <tbody>
                            <?php $no = 0;?>
                            @foreach ($admins as $admin)
                            <?php $no++;?>
                            <tr>
                                 <th scope="row">{{$no}}</th>
                                 <td>{{$admin->name}}</td>
                                 <td>{{$admin->email}}</td>
                                 <td>{{$admin->role}}</td>
                                 <td>
                                    <button wire:click="getMenu({{$admin->id}})" class="btn btn-sm btn-info text-white">Edit</button>
                                    <button wire:click="destroy({{$admin->id}})" class="btn btn-sm btn-danger text-white">Delete</button>
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

