<div class="col-12 ">
    <div class="card" style="background-color: #181824">
        <div class="card-body border">
            @if (session()->has('message'))
            <div class="alert alert-success">
                <div class="row justify-content-center">
                    {{session('message')}}
                </div>
            </div>
            @endif
            <h4 class="card-title text-white">Edit Profil</h4>
            <form  wire:submit.prevent="update" >
                <input type="hidden" name="" wire:model="pembeliId">
                <div class="form-group">
                    <label for="name" class="text-white">Name</label>
                    <input wire:model="name"  type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" >
                    @error('name')
                        <span class="invalid-feedback">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email" class="text-white">Email</label>
                    <input  type="text" wire:model="email" class="form-control " placeholder="Email"  readonly>
                </div>
                <div class="form-group">
                    <label for="nama_lengkap" class="text-white">Nama Lengkap</label>
                    <input  type="text" wire:model="nama_lengkap" class="form-control  @error('nama_lengkap') is-invalid @enderror" placeholder="Nama Lengkap">
                    @error('nama_lengkap')
                        <span class="invalid-feedback">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="no_hp" class="text-white">No Telepon</label>
                    <input  type="text" wire:model="no_hp" class="form-control  @error('no_hp') is-invalid @enderror" placeholder="No Telepon">
                    @error('no_hp')
                        <span class="invalid-feedback">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin" class="text-white">Jenis Kelamin</label>
                    <select class="form-control  @error('jenis_kelamin') is-invalid @enderror" wire:model="jenis_kelamin">
                        <option value="">Pilih jenis_kelamin</option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Wanita">Wanita</option>
                    </select>
                    @error('jenis_kelamin')
                        <span class="invalid-feedback">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="alamt" class="text-white">Alamat Lengkap</label>
                    <textarea wire:model="alamat" placeholder="Alamat Lenghkap" class="form-control  @error('alamat') is-invalid @enderror"></textarea>
                    @error('alamat')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
                </div>
                <div class="form-group">
                    @if ($gambar)
                        <img src="{{ $gambar->temporaryUrl() }}" class="img-fluid img-thumbnail" width="200px">
                    @endif
                </div>
                <label for="alamt" class="text-white">Silahkan Pilih Gambar</label>
                <div class="form-group">
                    <input type="file" wire:model="gambar" class=" btn btn-outline-light" name="gambar">
                    @error('gambar') <span class="error">{{ $message }}</span> @enderror
                </div>
                <button type="submit" class="btn btn-primary float-right">Edit</button>
            </form>
        </div>
    </div>
</div>
