<div class="container">
    <h3>Profil</h3>
    <div class="row">
        <livewire:admin.tempat.pesan />
        <div class="col-md-4">
            <div class="card-body border">
                <img class="card-img-top img-fluid  img-thumbnail" src="{{auth()->user()->asaKau()}}" alt="Card image cap">
                <table class="table">
                    <tbody>
                        <tr>
                            <td>Name</td>
                            <td>{{auth()->user()->name}}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{auth()->user()->email}}</td>
                        </tr>
                        <tr>
                            <td>Role</td>
                            <td>{{auth()->user()->role}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-8">
         <livewire:admin.profil.update>
         <livewire:admin.profil.ganti>
        </div>
    </div>
</div>

