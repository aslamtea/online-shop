<div class="relative">
    <input class="form-control rounded-pill fas fa-search" type="search" wire:model="cari" placeholder="Search" aria-label="Search">
    <div class="dropdown">
        @if (strlen($cari) > 0)
        <div class=" dropdown-menu " style="display: block;width:100%;border:0;background-color: transparent">
            @if ($barangs->count() > 0)
            @foreach ($barangs as $barang)
            <a class=" text-white border-light list-group-item list-group-item-action" style="background-color: #181828" href="/user/produk/{{$barang->slug}}" data-turbolinks-action="replace">{{substr($barang->name,5)}}</a>
            @endforeach
            @else
            <a class=" text-white border-light list-group-item list-group-item-action" style="background-color: #181828" href="#">No Results for "{{$cari}}"</a>
            @endif
        </div>
        @endif
    </div>
</div>
