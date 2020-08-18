<div class="row">
    @if ($likes)
        <div class="m-2 btn text-white btn-lg font-weight-bold" wire:click="hapusLike({{$likes->id}})"><i class="fas fa-thumbs-up text-warning mr-2"></i>{{$barang->like->count()}}</div>
    @else
        <div class="m-2 btn text-white btn-lg font-weight-bold" wire:click="tambahLike"><i class="far fa-thumbs-up text-white mr-2"></i>{{$barang->like->count()}}</div>
    @endif

    @if ($dislikes)
        <div class="btn btn-lg text-white m-2 font-weight-bold" wire:click="hapusDislike({{$dislikes->id}})"><i class="fas fa-thumbs-down text-warning mr-2"></i>{{$barang->dislike->count()}}</div>
    @else
        <div class="btn btn-lg text-white m-2 font-weight-bold" wire:click="tambahDislike"><i class="far fa-thumbs-down text-white mr-2"></i>{{$barang->dislike->count()}}</div>
     @endif
</div>
