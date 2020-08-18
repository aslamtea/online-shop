<div>
    <div class="mb-3">
        <h6>Tambah Akses</h6>
    </div>
    <form wire:submit.prevent="create">
        <div class="form-group">
            <div class="form-row">
                <div class="col">
                    <input wire:model="role" type="text" class="form-control @error('role') is-invalid @enderror" placeholder="Role">
                    @error('role')
                        <span class="invalid-feedback">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col">
                    <select wire:model="menu_id" class="form-control form-control-user @error('menu_id') is-invalid @enderror" >
                        <option value="">Select Akses</option>
                        @foreach ($menus as $m)
                        <option value="{{$m->id}}">{{$m->name}}</option>
                        @endforeach
                    </select>
                    @error('menu_id')
                    <div class="invalid-feedback">
                    {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-sm btn-primary">Tambahkan</button>
    </form>

</div>
