<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-11">
            <div class="card bg-gradient-light">
                <div class="card-header">
                    <h1 class="text-center">Tambah barang</h1>
                </div>
                <div class="card-body">
                    <form  wire:submit.prevent="create">
                        <div class="row">
                            <div class="col">
                                <input wire:model="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Nama Barang">
                                @error('name')
                                    <span class="invalid-feedback">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col">
                                <select wire:model="kategori_id" class="form-control form-control-user @error('kategori_id') is-invalid @enderror" >
                                    <option value="">Select Kategori</option>
                                    @foreach ($kategoris as $m)
                                    <option value="{{$m->id}}">{{$m->name}}</option>
                                    @endforeach
                                </select>
                                @error('kategori_id')
                                <div class="invalid-feedback">
                                {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <input wire:model="stok" type="number" class="form-control @error('stok') is-invalid @enderror" placeholder="Stok Barang">
                                @error('stok')
                                    <span class="invalid-feedback">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col">
                                <input wire:model="harga" type="number" class="form-control @error('harga') is-invalid @enderror" placeholder="Harga Barang">
                                @error('harga')
                                    <span class="invalid-feedback">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col">
                                <input wire:model="berat" type="number" class="form-control @error('berat') is-invalid @enderror" placeholder="Berat Barang Dalam Gram">
                                @error('berat')
                                    <span class="invalid-feedback">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                            @if ($gambar)
                                <div class="mt-3">
                                    <div class="m-3">
                                        <img src="{{ $gambar->temporaryUrl() }}" class="img-fluid" width="150">
                                    </div>
                                </div>
                            @endif
                            @if (!$gambar)
                                <div class="m-5">
                                    <h5>
                                        Pilih Untuk Liat Gambar:
                                    </h5>
                                </div>
                            @endif
                            </div>
                            <div class="col">
                                <div class="m-5">
                                    <input type="file" wire:model="gambar" class="form-control-user form-control  @error('gambar') is-invalid @enderror">
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                                <textarea  wire:model="isi" class="form-control form-control-user  @error('isi') is-invalid @enderror" id="isi"  rows="3" placeholder="isi Description"></textarea>
                            @error('isi')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="m-3">
                            <button type="submit" class="btn btn-primary m-1">Tambah barang</button>
                            <a href="/admin/barang" data-turbolinks-action="replace" class="btn btn-warning m-1">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


