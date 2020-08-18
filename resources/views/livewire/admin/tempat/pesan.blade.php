<div>
    @if (session()->has('message'))
    <div class="alert alert-success">
        <div class="row justify-content-center">
            {{session('message')}}
        </div>
    </div>
    @endif
</div>
