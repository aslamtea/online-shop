<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-11">
            <livewire:admin.tempat.pesan />
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Submenu</h4>
                </div>
                <div class="card-body">
                    <livewire:admin.submenu.create>
                    <hr>
                    @if ($statusUpdate)
                    <livewire:admin.submenu.update>
                    <hr>
                    @endif
                    <table class="table">
                        <thead class="thead-light">
                             <tr>
                                 <th scope="col">No</th>
                                 <th scope="col">Menu</th>
                                 <th scope="col">Name</th>
                                 <th scope="col">Icon</th>
                                 <th scope="col">Action</th>
                             </tr>
                        </thead>
                        <tbody>
                            <?php $no = 0;?>
                            @foreach ($submenus as $submenu)
                            <?php $no++;?>
                            <tr>
                                 <th scope="row">{{$no}}</th>
                                 <td>{{$submenu->menu->name}}</td>
                                 <td>{{$submenu->name}}</td>
                                 <td>{{$submenu->icon}}</td>
                                 <td>
                                    <button wire:click="getSubmenu({{$submenu->id}})" class="btn btn-sm btn-info text-white">Edit</button>
                                    <button wire:click="destroy({{$submenu->id}})" class="btn btn-sm btn-danger text-white">Delete</button>
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

