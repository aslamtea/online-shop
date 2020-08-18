<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-11">
            <livewire:admin.tempat.pesan />
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Menu Url</h4>
                </div>
                <div class="card-body">
                    <livewire:admin.menu-url.create>
                    <hr>
                    @if ($statusUpdate)
                    <livewire:admin.menu-url.update>
                    <hr>
                    @endif
                    <table class="table table-md">
                        <thead class="thead-light">
                             <tr>
                                 <th scope="col">No</th>
                                 <th scope="col">Menu</th>
                                 <th scope="col">Submenu</th>
                                 <th scope="col">Name</th>
                                 <th scope="col">Url</th>
                                 <th scope="col">Action</th>
                             </tr>
                        </thead>
                        <tbody>
                            <?php $no = 0;?>
                            @foreach ($menu_urls as $menu_url)
                            <?php $no++;?>
                            <tr>
                                 <th scope="row">{{$no}}</th>
                                 <td>{{$menu_url->submenu->menu->name}}</td>
                                 <td>{{$menu_url->submenu->name}}</td>
                                 <td>{{$menu_url->name}}</td>
                                 <td>{{$menu_url->url}}</td>
                                 <td>
                                    <button wire:click="getMenu_url({{$menu_url->id}})" class="btn btn-sm btn-info text-white">Edit</button>
                                    <button wire:click="destroy({{$menu_url->id}})" class="btn btn-sm btn-danger text-white">Delete</button>
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

