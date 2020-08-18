<div>
    @if ($oke == true)
    <div class="modal-tukang">
        <div class="hitam"></div>
        <div class="row justify-content-center">
            <div class="modal-box">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Logout</h5>
                    <button type="button" class="close" wire:click="takjadi" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    <div class="row justify-content-center">
                        <h4 >Apa Anda Yakin Akan Keluar</h4>
                    </div>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" wire:click="takjadi">Close</button>
                    <button type="button" class="btn btn-primary" wire:click="keluar">Ya Saya Yakin </button>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
