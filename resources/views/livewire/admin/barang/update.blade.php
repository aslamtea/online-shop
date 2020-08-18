<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-11">
            <div class="card bg-gradient-light">
                <div class="card-header">
                    <h1 class="text-center">Edit barang</h1>
                </div>
                <div class="card-body">
                    <form  wire:submit.prevent="update">
                        <input type="hidden" wire:model="barangId">
                        <div class="row">
                            <div class="col">
                                <label for="name">Nama Barang</label>
                                <input wire:model="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Nama Barang">
                                @error('name')
                                    <span class="invalid-feedback">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="kategori_id">Kategori</label>
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
                                <label for="stok">Stok Barang</label>
                                <input wire:model="stok" type="number" class="form-control @error('stok') is-invalid @enderror" placeholder="Stok Barang">
                                @error('stok')
                                    <span class="invalid-feedback">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="harga">Harga Barang</label>
                                <input wire:model="harga" type="number" class="form-control @error('harga') is-invalid @enderror" placeholder="Harga Barang">
                                @error('harga')
                                    <span class="invalid-feedback">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="berat">Berat Barang</label>
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
                                <div class="mt-3">
                                    <h6>Gambar Lama</h6>
                                    <div class="m-1">
                                    <img src="{{asset('storage/'.$barang->gambar) }}" class="img-fluid" width="150">
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                @if ($gambar_baru)
                                    <div class="mt-3">
                                        <h6>Gambar Lama</h6>
                                        <div class="m-1">
                                            <img src="{{ $gambar_baru->temporaryUrl() }}" class="img-fluid" width="150">
                                        </div>
                                    </div>
                                @endif
                                @if (!$gambar_baru)
                                    <div class="mt-4">
                                        <h5>
                                            Pilih Untuk Liat Gambar:
                                        </h5>
                                    </div>
                                @endif
                            </div>
                            <div class="col">
                                <div class="m-5">
                                    <input type="file" wire:model="gambar_baru" class="form-control-user form-control  @error('gambar_baru') is-invalid @enderror">
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label for="isi">Isi Description</label>
                                <textarea  wire:model="isi" class="form-control form-control-user  @error('isi') is-invalid @enderror" id="isi"  rows="3" placeholder="isi Description"></textarea>
                            @error('isi')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="m-3">
                            <button type="submit" class="btn btn-primary">Edit barang</button>
                            <a href="/admin/barang" data-turbolinks-action="replace" class="btn btn-warning m-1">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


