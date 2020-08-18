<div>
    @if ($oke == true)
        <div class="modal-tukang">
            <div class="hitam"></div>
            <div class="row justify-content-center">
                <div class="modal-box">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Form Pengiriman</h5>
                                <button type="button" class="close" wire:click="takjadi" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form  wire:submit.prevent="kirim">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="province">Provinsi <span>*</span></label>
                                        <select wire:model="province" class="form-control @error('province') is-invalid @enderror">
                                            <option value="" holder>Pilih Provinsi</option>
                                            @foreach($provinces as $province)
                                            <option value="{{$province->id}}">{{$province->province}}</option>
                                            @endforeach

                                        </select>
                                        @error('province')
                                            <div class="invalid-feedback ml-3">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="city">Town/City <span>*</span></label>
                                        <select wire:model="city" class="form-control @error('city') is-invalid @enderror">
                                            <option value="">Silahkan Pilih</option>
                                            @foreach ($cities as $city)
                                            <option value="{{$city->id}}">{{$city->city_name}}</option>
                                            @endforeach
                                        </select>
                                        @error('city')
                                            <div class="invalid-feedback ml-3">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="first_name">Kurir <span>*</span></label>
                                        <select wire:model="courier"  class="form-control @error('courier') is-invalid @enderror">
                                            <option value="" holder>Pilih Kurir</option>
                                            <option value="jne">JNE</option>
                                            <option value="tiki">TIKI</option>
                                            <option value="pos">POS</option>
                                        </select>
                                        @error('courier')
                                            <div class="invalid-feedback ml-3">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button  class="btn btn-primary" >Ya Saya Yakin </button>
                                    <div class="btn btn-secondary" wire:click="takjadi">Close</div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
