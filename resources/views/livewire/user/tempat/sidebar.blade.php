
<div class="col-md-2">
    <ul class="list-group list-group-flush p-2 pt-4">
        <li class="list-group-item bg-transparent text-white font-weight-bold"><i class="fas fa-list"></i> Kategori
            Produk
        </li>
        @foreach ($kategoris as $kategori)
        <li class="list-group-item bg-transparent">
            <a href="#elektronik1" class="text-decoration-none  text-white">
                <i class="fas fa-angle-right"></i> {{$kategori->name}}
            </a>
        </li>
        @endforeach
    </ul>
</div>
