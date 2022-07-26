<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ $page_title }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('partials.seo')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue.'/questionnaire/style.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="{{ asset($activeTemplateTrue.'/js/vendor/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset($activeTemplateTrue.'questionnaire/script.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>   
</head>

<body class="bg_img">
    <header class="header_sec">
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">               
            {{-- PUT LOGO HERE --}}
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="#">Sign-up <span class="sr-only">(current)</span></a>
                    </li>
         
                </ul>
                <span class="mr-sm-2 "><a href="#" class="text-white"><i class="fa fa-close"></i></a></span>
            </div>
        </nav>
    </header>

    {{-- main section --}}
    @yield('content')
    {{-- main section --}}
  
    <script>
        $(document).ready(function () {
            $("#show_hide_password a").on('click', function (event) {
                event.preventDefault();
                if ($('#show_hide_password input').attr("type") == "text") {
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').addClass("fa-eye-slash");
                    $('#show_hide_password i').removeClass("fa-eye");
                } else if ($('#show_hide_password input').attr("type") == "password") {
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass("fa-eye-slash");
                    $('#show_hide_password i').addClass("fa-eye");
                }
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
