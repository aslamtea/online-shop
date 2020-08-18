<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-10">
            <livewire:admin.tempat.pesan />
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">kupon</h4>
                </div>
                <div class="card-body">
                    <livewire:admin.kupon.create>
                    <hr>
                    @if ($statusUpdate)
                    <livewire:admin.kupon.update>
                    <hr>
                    @endif
                    <table class="table">
                        <thead class="thead-light">
                             <tr>
                                 <th scope="col">No</th>
                                 <th scope="col">Penulis</th>
                                 <th scope="col">Code</th>
                                 <th scope="col">Persen</th>
                                 <th scope="col">Action</th>
                             </tr>
                        </thead>
                        <tbody>
                            <?php $no = 0;?>
                            @foreach ($kupons as $kupon)
                            <?php $no++;?>
                            <tr>
                                 <th scope="row">{{$no}}</th>
                                 <td>{{$kupon->user->name}}</td>
                                 <td>{{$kupon->code}}</td>
                                 <td>{{$kupon->persen}}%</td>
                                 <td>
                                    <button wire:click="getKupon({{$kupon->id}})" class="btn btn-sm btn-info text-white">Edit</button>
                                    <button wire:click="destroy({{$kupon->id}})" class="btn btn-sm btn-danger text-white">Delete</button>
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

