<div class="row mb-5">
    <div class="col-md-12">
        @if (session()->has('gagal'))
            <div class="alert alert-danger">
                <div class="row justify-content-center">
                    {{session('gagal')}}
                </div>
            </div>
        @endif
        @if (session()->has('message'))
            <div class="alert alert-success">
                <div class="row justify-content-center">
                    {{session('message')}}
                </div>
            </div>
        @endif
        <div class="p-5 border">
            <h2 class="h3 mb-3 text-white">Coupon Code</h2>
            <label for="" class="text-white mb-3">Masukan Kode Kupon Jika Ada</label>
            <form  wire:submit.prevent="cupon">
                <div class="input-group w-75">
                    <input wire:model="code" type="text" class="form-control @error('code') is-invalid @enderror" placeholder="Masukan Kupon">
                    <div class="input-group-append">
                        <button class="btn btn-outline-light btn-sm">Apply</button>
                    </div>
                    @error('code')
                        <span class="invalid-feedback">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
            </form>
        </div>
    </div>
</div>
