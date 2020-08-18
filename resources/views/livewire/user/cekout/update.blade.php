<td>
    @if (session()->has('gagal'))
    <div class="alert alert-danger p-1">
        <div class="row justify-content-center">
            <span>
                {{session('gagal')}}
            </span>
        </div>
    </div>
    @endif
    @if (session()->has('success'))
    <div class="alert alert-danger p-1">
        <div class="row justify-content-center">
            <span>
                {{session('success')}}
            </span>
        </div>
    </div>
    @endif
    <form wire:submit.prevent="update" >
        <div class="row justify-content-center text-center mb-1" >
            <input type="hidden" wire:model="detailId">
            <div class="btn btn-outline-light btn-sm" wire:click="kurang"><i class="fas fa-minus" aria-hidden="true"></i></div>
            <input type="number" style="width: 60px" wire:model="jumlah">
            <div class="btn btn-outline-light btn-sm" wire:click="tambah"><i class="fa fa-plus" aria-hidden="true"></i></div>
        </div>
        <button  class="btn btn-outline-light btn-sm font-weight-bold" style="width: 60%">Update</button>
    </form>
</td>
