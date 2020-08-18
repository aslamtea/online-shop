<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('admin')}}/vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('admin')}}/css/my.css">
    @livewireStyles
    <script src="{{asset('admin')}}/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('admin')}}/vendor/bootstrap/js/bootstrap.js"></script>
    <script src="{{mix('js/app.js')}}"></script>
    @livewireScripts
</head>

<body style="background-color: #181824">

   @yield('content')

   <livewire:user.produk.pesan/>
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
</body>

</html>
