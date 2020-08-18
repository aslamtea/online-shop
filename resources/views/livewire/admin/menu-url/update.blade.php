<div>
    <div class="mb-3">
        <h6>Edit Menu Url</h6>
    </div>
    <form wire:submit.prevent="update">
        <input type="hidden" name="" wire:model="menu_urlId">
        <div class="form-group">
            <div class="form-row">
                <div class="col">
                    <input wire:model="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name">
                    @error('name')
                        <span class="invalid-feedback">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col">
                    <input wire:model="url" type="text" class="form-control @error('url') is-invalid @enderror" placeholder="Name">
                    @error('url')
                        <span class="invalid-feedback">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col">
                    <select wire:model="submenu_id" class="form-control form-control-user @error('submenu_id') is-invalid @enderror" >
                        <option value="">Select Menu Url</option>
                        @foreach ($submenus as $m)
                        <option value="{{$m->id}}"
                            @if ($m->id == $submenu_id)
                                selected
                            @endif
                            >{{$m->name}}</option>
                        @endforeach
                    </select>
                    @error('submenu_id')
                    <div class="invalid-feedback">
                    {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-sm btn-primary">Edit</button>
    </form>

</div>
