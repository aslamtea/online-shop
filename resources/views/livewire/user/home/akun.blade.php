<div class="col-md-10 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="card mb-3"  style="background-color: #181824">
                    <div class="card-body border">
                        <h3 class="text-white mb-3">Profil</h3>
                        <img class="card-img-top img-fluid  img-thumbnail" src="{{$pembeli->asaKau()}}" alt="Card image cap">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td class="text-white">Name</td>
                                    <td class="text-white">{{$pembeli->name}}</td>
                                </tr>
                                <tr>
                                    <td class="text-white">Email</td>
                                    <td class="text-white">{{$pembeli->email}}</td>
                                </tr>
                                <tr>
                                    <td class="text-white">Nama Lengkap</td>
                                    @if (strlen($pembeli->nama_lengkap) > 3)
                                        <td class="text-white">{{$pembeli->nama_lengkap}}</td>
                                    @else
                                        <td class="text-white">Data Belum Ada </td>
                                    @endif
                                </tr>
                                <tr>
                                    <td class="text-white">No Telepon</td>
                                    @if (strlen($pembeli->no_hp) > 3)
                                        <td class="text-white">{{$pembeli->no_hp}}</td>
                                    @else
                                        <td class="text-white">Data Belum Ada </td>
                                    @endif
                                </tr>
                                <tr>
                                    <td class="text-white"> Jenis Kelamin</td>
                                    @if (strlen($pembeli->jenis_kelamin) > 3)
                                        <td class="text-white">{{$pembeli->jenis_kelamin}}</td>
                                    @else
                                        <td class="text-white">Data Belum Ada </td>
                                    @endif
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td class="text-white"> Alamat Lengkap</td>
                                    @if (strlen($pembeli->alamat) > 3)
                                        <td class="text-white">{{$pembeli->alamat}}</td>
                                    @else
                                        <td class="text-white">Data Belum Ada </td>
                                    @endif
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
             <livewire:user.home.update>
             <livewire:user.home.ganti>
            </div>
        </div>
    </div>


</div>
