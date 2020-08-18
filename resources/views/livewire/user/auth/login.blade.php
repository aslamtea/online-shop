
<div class="col-10 mt-lg-5">
    <div class="row justify-content-center mt-5 mb-5">
        <div class="col-md-5">
            @if (session()->has('gagal'))
            <div class="alert alert-danger">
                <div class="row justify-content-center">
                    {{session('gagal')}}
                </div>
            </div>
            @endif
            <div class="card p-3 border border-white" style="background-color: #181828">
                <div class="card-body" style="border-radius: 10%">
                    <h3 class="text-center mb-4 text-white font-weight-bold">Form Login</h3>
                    <form wire:submit.prevent="login">
                        <div class="form-group">
                            <input type="text" wire:model="email"  class="form-control form-control-user @error('email') is-invalid @enderror" placeholder="Email">
                            @error('email')
                            <span class="invalid-feedback ml-3">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" wire:model="password" id="lihatPassword" class="form-control form-control-user @error('password') is-invalid @enderror" placeholder="Password">
                            @error('password')
                            <span class="invalid-feedback ml-3">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                        <input type="checkbox" id="checkbox"> <span class="text-white">Lihat Password</span>
                        <div class="card-footer mt-4">
                            <button class="btn btn-outline-light btn-block btn-user">Login</button>
                        </div>
                    </form>
                    <div class="text-center">
                        <a class="small text-light" href="#">Lupa Password ?</a>
                    </div>
                    <div class="text-center">
                        <a class="small text-light" data-turbolinks-action="replace"  href="/user/register">Buar Akun Baru</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <h4 class="text-white font-weight-bold m-4">Produk Kami</h4>
    </div>
    <div class="row justify-content-center">
        @foreach ($barangs as $bar)
        <div class="col-lg-3 mt-1" style="width: 13rem">
            <div class="card m-1 gg" style="background-color: #181828">
                <img src="{{asset('storage/'.$bar->gambar) }}" class="card-img-top" alt="...">
                <div class="card-header">
                    <h5 class="text-white card-title">{{$bar->name}}</h5>
                    <p class="text-white card-text">Harga <span>{{$bar->harga}}</span></p>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star-half-alt text-warning"></i>
                    <i class="far fa-star text-warning"></i><br>
                    <a href="/user/produk/{{$bar->slug}}" data-turbolinks-action="replace" class="btn btn-block btn-outline-light">lihat</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<script>
    $(document).ready(function () {
    $("#checkbox").click(function () {
        if ($(this).is(":checked")) {
            $("#lihatPassword").attr('type', 'text')
        } else {
            $("#lihatPassword").attr('type', 'password')
        }
    })
})
</script>
