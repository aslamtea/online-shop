<div class="p-5 align-items-center">
    <div class="col-md-5  mx-auto">
        @if (session()->has('gagal'))
        <div class="alert alert-danger">
            <div class="row justify-content-center">
                {{session('gagal')}}
            </div>
        </div>
        @endif
        <div class="card  p-3" style="background-color: #181824">
            <div class="card-body border" style="border-radius: 10%">
                <h3 class="text-center mb-4 text-white  font-weight-bold">Form Login</h3>
                <form wire:submit.prevent="login">
                    <div class="form-group">
                        <input type="text" wire:model="form.email"  class="form-control form-control-user @error('form.email') is-invalid @enderror" placeholder="Email">
                        @error('form.email')
                        <span class="invalid-feedback ml-3">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="password" wire:model="form.password" id="lihatPassword" class="form-control form-control-user @error('form.password') is-invalid @enderror" placeholder="Password">
                        @error('form.password')
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
                    <a class="small text-white" href="#">Lupa Password ?</a>
                </div>
                <div class="text-center">
                    <a class="small text-white" data-turbolinks-action="replace"  href="/register">Buar Akun Baru</a>
                </div>
            </div>
        </div>
    </div>
</div>
