<div class="container">
    <div class="row">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Dashboard</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card p-1 text-white mb-3" style="background-color: #181824">
                                <div class="card-body border" style="border-radius: 10%">
                                    <div class="row">
                                        <div class="col-md-8 pr-0 pl-0">
                                            <h6 class="text-center">Jumlah Admin</h6>
                                            <div class="text-center display-4 font-weight-bold">{{$admins->count()}}</div>
                                        </div>
                                        <div class="col-md-4 ml-auto pl-0">
                                            <i class="fas fa-laptop mt-3 mr-5" style="font-size: 70px"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card p-1 text-white mb-3" style="background-color: #181824">
                                <div class="card-body border" style="border-radius: 10%">
                                    <div class="row">
                                        <div class="col-md-8 pr-0 pl-0">
                                            <h6 class="text-center">Jumlah Akun Pembeli</h6>
                                            <div class="text-center display-4 font-weight-bold">{{$pembelis->count()}}</div>
                                        </div>
                                        <div class="col-md-4 ml-auto pl-0">
                                            <i class="fas fa-users mt-3 mr-5" style="font-size: 70px"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card p-1 text-white mb-3" style="background-color: #181824">
                                <div class="card-body border" style="border-radius: 10%">
                                    <div class="row">
                                        <div class="col-md-8 pr-0 pl-0">
                                            <h6 class="text-center">Jumlah Barang</h6>
                                            <div class="text-center display-4 font-weight-bold">{{$barangs->count()}}</div>
                                        </div>
                                        <div class="col-md-4 ml-auto pl-0">
                                            <i class="fas fa-laptop mt-3 mr-5" style="font-size: 70px"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card p-1 text-white mb-3" style="background-color: #181824">
                                <div class="card-body border" style="border-radius: 10%">
                                    <div class="row">
                                        <div class="col-md-8 pr-0 pl-0">
                                            <h6 class="text-center">Jumlah Kategori</h6>
                                            <div class="text-center display-4 font-weight-bold">{{$kategoris->count()}}</div>
                                        </div>
                                        <div class="col-md-4 ml-auto pl-0">
                                            <i class="fas fa-laptop mt-3 mr-5" style="font-size: 70px"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card p-1 text-white mb-3" style="background-color: #181824">
                                <div class="card-body border" style="border-radius: 10%">
                                    <div class="row">
                                        <div class="col-md-8 pr-0 pl-0">
                                            <h6 class="text-center">Jumlah Kupon</h6>
                                            <div class="text-center display-4 font-weight-bold">{{$kupons->count()}}</div>
                                        </div>
                                        <div class="col-md-4 ml-auto pl-0">
                                            <i class="fas fa-laptop mt-3 mr-5" style="font-size: 70px"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card p-1 text-white mb-3" style="background-color: #181824">
                                <div class="card-body border" style="border-radius: 10%">
                                    <div class="row">
                                        <div class="col-md-8 pr-0 pl-0">
                                            <h6 class="text-center">Jumlah Pesanan</h6>
                                            <div class="text-center display-4 font-weight-bold">{{$pesanans->count()}}</div>
                                        </div>
                                        <div class="col-md-4 ml-auto pl-0">
                                            <i class="fas fa-laptop mt-3 mr-5" style="font-size: 70px"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
