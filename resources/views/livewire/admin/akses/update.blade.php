<div>
    <div class="mb-3">
        <h6>Edit Akses</h6>
    </div>
    <form wire:submit.prevent="update">
        <input type="hidden" name="" wire:model="aksesId">
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
                        <option value="">Select Submenu</option>
                        @foreach ($menus as $m)
                        <option value="{{$m->id}}"
                            @if ($m->id == $menu_id)
                                selected
                            @endif
                            >{{$m->name}}</option>
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
        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
    </form>

</div>
