<div>
    @if (session()->has('message'))
    <div class="modal-tukang">
        <div class="hitam"></div>
        <div class="row justify-content-center">
            <div class="modal-box">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Anda Berhasil</h5>
                        <button type="button" class="close" wire:click="oke" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                    <div class="modal-body">
                        <div class="row justify-content-center">
                            <h4>
                                {{session('message')}}
                            </h4>
                        </div>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-block rounded" wire:click="oke">Lanjutkan</button>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
