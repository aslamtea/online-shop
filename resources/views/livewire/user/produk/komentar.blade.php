<div class="row">
    <div class="container col-md-10">
        @if (session()->has('berhasil'))
        <div class="alert alert-success">
            <div class="row justify-content-center">
                {{session('berhasil')}}
            </div>
        </div>
        @endif
        <div class="">
            @if ($barang->komentar->count() > 0 )
            <h5 class="title text-white mb-4">{{$barang->komentar->count()}} Komentar</h5>
            @foreach ($barang->komentar as $komentar)
            <div class="media mt-3">
                <img src="{{ $komentar->pembeli->asaKau() }}" class="mr-3 rounded-circle" alt="..." style="width: 60px">
                <div class="media-body">
                    <div class="row">
                        <div class="col">
                            <h6 class="mt-0 text-white">{{$komentar->pembeli->name}}</h6>
                            <p class="mb-1 text-white" style="font-size: 12px">{{$komentar->created_at}}</p>
                        </div>
                        @if ($komentar->pembeli->id == session('id'))
                        <div class="mr-3 ml-auto">
                            <button class="badge  badge-danger" wire:click="hapus({{$komentar->id}})"><i class="fas fa-trash"></i></button>
                        </div>
                        @endif
                    </div>
                    <p class="mb-1 border p-1">
                        <span class="ml-3 text-white">{{$komentar->conten}}</span>
                    </p>
                </div>
            </div>
            @endforeach
            @else
                <div class="row justify-content-center">
                    <h4 class="text-white">Belum Ada Komentar</h4>
                </div>
            @endif
        </div>
        <div class="post-a-comment-area section-padding-80-0">
            <div class="media">
                <div class="media-body">
                    <form wire:submit.prevent="komen">
                        <div class="row">
                            <div class="col-12  mt-2">
                                @if (session()->has('message'))
                                <div class="alert alert-success">
                                    <div class="row justify-content-center">
                                        {{session('message')}}
                                    </div>
                                </div>
                                @endif
                            </div>
                            <div class="col-12 text-center pt-4">
                                <input type="text" wire:model="conten" class="form-control @error('conten') is-invalid @enderror"  placeholder="Silahkan Isi komentar anda">
                                @error('conten')
                                    <span class="invalid-feedback">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12 text-center p-3">
                                <button class="btn btn-outline-light btn-block">Submit Comment</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
