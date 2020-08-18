
<div class="p-5 align-items-center">
    <div class="col-md-5 mx-auto">
        <div class="card p-2  " style="background-color: #181824">
            <div class="card-body border" style="border-radius: 10%">
                <h3 class="text-center mb-4  text-white font-weight-bold">Form Login</h3>
                <form wire:submit.prevent="register">
                    <div class="form-group">
                        <input type="text"  wire:model="name" class="form-control form-control-user  @error('name') is-invalid @enderror" placeholder="Username">
                        @error('name')
                            <span class="invalid-feedback text-center">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" wire:model="email"  class="form-control form-control-user  @error('email') is-invalid @enderror" placeholder="Email">
                        @error('email')
                            <span class="invalid-feedback text-center">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="password" wire:model="password" id="lihatPassword" class="form-control form-control-user  @error('password') is-invalid @enderror" placeholder="Password">
                        @error('password')
                            <span class="invalid-feedback text-center">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="password" wire:model="konci1" class="form-control form-control-user  @error('konci1') is-invalid @enderror" placeholder="Ulangi Password">
                        @error('konci1')
                            <span class="invalid-feedback text-center">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <input type="checkbox" id="checkbox"> <span class="text-white">Lihat Password</span>
                    <div class="card-footer mt-4">
                        <button class="btn btn-outline-light btn-block btn-user">Register</button>
                    </div>
                </form>
                <div class="text-center">
                    <a class="small text-white" href="#">Lupa Password ?</a>
                </div>
                <div class="text-center">
                    <a class="small text-white" data-turbolinks-action="replace"  href="/login">Sudah Punya Akun</a>
                </div>
            </div>
        </div>
    </div>
</div>
