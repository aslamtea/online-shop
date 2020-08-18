<div class="col-12 mt-4">
    <div class="card">
        @if (session()->has('message'))
        <div class="alert alert-success">
            <div class="row justify-content-center">
                {{session('message')}}
            </div>
        </div>
        @endif
      <div class="card-body">
        <h4 class="card-title">Edit Profil</h4>
        <form  wire:submit.prevent="ganti" >
            <input type="hidden"  wire:model="userId">
          <div class="form-group">
            <label for="password">Password Lama</label>
            <input wire:model="password" type="password" class="form-control @error('password') is-invalid @enderror" >
            @error('password')
                <span class="invalid-feedback">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
          </div>
          <div class="form-group">
            <label for="password_baru">Password Baru</label>
            <input wire:model="password_baru" type="password" class="form-control @error('password_baru') is-invalid @enderror" >
            @error('password_baru')
                <span class="invalid-feedback">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
          </div>
          <div class="form-group">
            <label for="password_confirmation">Password Konfirmasi</label>
            <input wire:model="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror">
            @error('password_confirmation')
                <span class="invalid-feedback">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
          </div>
          <button type="submit" class="btn btn-primary float-right">Edit</button>
        </form>
      </div>
    </div>
</div>
