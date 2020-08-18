<div>
    <div class="mb-3">
        <h6>Edit Kupon</h6>
    </div>
    <form wire:submit.prevent="update">
        <input type="hidden" name="" wire:model="kuponId">
        <div class="form-group">
            <div class="form-row">
                <div class="col">
                    <input wire:model="code" type="text" class="form-control @error('code') is-invalid @enderror" placeholder="Code">
                    @error('code')
                        <span class="invalid-feedback">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col">
                    <input wire:model="persen" type="number" class="form-control @error('persen') is-invalid @enderror" placeholder="Persen">
                    @error('persen')
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
