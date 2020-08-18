<div class="col-12 ">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit Profil</h4>
        <form  wire:submit.prevent="update" >
            <input type="hidden" name="" wire:model="userId">
          <div class="form-group">
            <label for="name">Name</label>
            <input wire:model="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" value="{{auth()->user()->name}}">
            @error('name')
                <span class="invalid-feedback">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input  type="text" class="form-control " placeholder="Email" value="{{auth()->user()->email}}" readonly>
          </div>
          <div class="form-group">
            <input type="file" wire:model="gambar" name="gambar">

            @error('gambar') <span class="error">{{ $message }}</span> @enderror
          </div>
          <button type="submit" class="btn btn-primary float-right">Edit</button>
        </form>
      </div>
    </div>
</div>

