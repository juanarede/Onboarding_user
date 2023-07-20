<!DOCTYPE html>
<html>
<head>
   
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

  

    <title>@yield('custom_title', 'Onboarding')</title>

    <style>
   
        body {
            background: linear-gradient(132deg, rgba(227,184,245,1) 0%, rgba(230,192,246,1) 5%, rgba(251,245,254,1) 18%, rgba(255,255,255,1) 32%);
            background-repeat:no-repeat;
            background-size: cover
        }
    </style>
</head>
<body>
    <div style="margin-top: 6rem" class="container">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/39f24fdfe8.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>
