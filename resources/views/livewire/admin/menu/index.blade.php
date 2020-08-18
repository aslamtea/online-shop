<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-10">
            <livewire:admin.tempat.pesan />
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Menu</h4>
                </div>
                <div class="card-body">
                    <livewire:admin.menu.create>
                    <hr>
                    @if ($statusUpdate)
                    <livewire:admin.menu.update>
                    <hr>
                    @endif
                    <table class="table">
                        <thead class="thead-light">
                             <tr>
                                 <th scope="col">No</th>
                                 <th scope="col">Name</th>
                                 <th scope="col">Action</th>
                             </tr>
                        </thead>
                        <tbody>
                            <?php $no = 0;?>
                            @foreach ($menus as $menu)
                            <?php $no++;?>
                            <tr>
                                 <th scope="row">{{$no}}</th>
                                 <td>{{$menu->name}}</td>
                                 <td>
                                    <button wire:click="getMenu({{$menu->id}})" class="btn btn-sm btn-info text-white">Edit</button>
                                    <button wire:click="destroy({{$menu->id}})" class="btn btn-sm btn-danger text-white">Delete</button>
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

