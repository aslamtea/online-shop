<div>
    <div class="mb-3">
        <h6>Edit Kategori</h6>
    </div>
    <form wire:submit.prevent="update">
        <input type="hidden" name="" wire:model="kategoriId">
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
            </div>
        </div>
        <button type="submit" class="btn btn-sm btn-primary">Edit</button>
    </form>
</div>
