<div class=" mt-5">
    <form wire:submit.prevent="pesan">
        <div class="row justify-content-center text-center m-4" >
            <div class="btn btn-outline-light" wire:click="kurang"><i class="fas fa-minus" aria-hidden="true"></i></div>
            <input type="hidden" wire:model="barangId">
            <input type="number" style="width: 70px" wire:model="jumlah">
            <div class="btn btn-outline-light" wire:click="tambah"><i class="fa fa-plus" aria-hidden="true"></i></div>
        </div>
        <button type="submit" class="btn btn-outline-light btn-block">Add to cart</button>
    </form>
</div>
