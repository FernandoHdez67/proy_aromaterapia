<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js"></script>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('mystyle/mystyle.css') }}">
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    {{-- <script src="//code.tidio.co/jy4xt97e32ubz1nmeqqt4jyrjt1kvend.js" async></script> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="icon" href="{{ asset('img/icono.ico') }}">
    {{-- <script src="{{ asset('js/desactivarclickderecho.js') }}"></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link rel="stylesheet" href="{{ asset('hover/hover-min.css') }}">
    <link rel="stylesheet" href="{{ asset('hover/hover.css') }}">
    {{-- <script src="https://www.google.com/recaptcha/api.js?render=6LeacA8lAAAAAIiAfvQQbcF5DTHDRfIkI7SsP4kG"></script> --}}
    {{-- <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('6LeacA8lAAAAAIiAfvQQbcF5DTHDRfIkI7SsP4kG', {
                action: 'formulario'
            });
        });

    </script> --}}

    <script src="{{ asset('js/ajax.js') }}"></script>

    {{-- <style>
        .active-link {
            background-color: rgb(3, 151, 161);
            color: #E15116;
        }

    </style> --}}

    <title>@yield('title')</title>
</head>

<body>
    <div class="contentido">
        <nav class="navbar navbar-expand-lg navbar-light bg-primary" onclick="changeNavColor()">
            <div class="container-fluid">
                <a id="div-btn1" href="#"><img id="div-btn1" src="{{ asset('img/logo_cir.png') }}" width="50px" height="50px" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <li class="nav-item">
                            <a id="div-btn1" href="#"></a>
                            <a id="div-btn1" style="color: white" class="nav-link active-link hvr-underline-from-left" aria-current="page" href="#"><b><i class="fa-solid fa-house"></i> Inicio</b></a>
                        </li>
                        <li class="nav-item">
                            <a id="div-btn1" style="color: white" class="nav-link tive-link hvr-underline-from-left" aria-current="page" href="#"><b><i class="fa-solid fa-circle-info"></i> Quienes somos</b></a>
                        </li>
                        <li class="nav-item">
                            <a id="div-btn1" style="color: white" class="nav-link  'active-link hvr-underline-from-left" aria-current="page" href="#"><b><i class="fa-solid fa-jar-wheat"></i> Productos</b></a>
                        </li>

                        <li class="nav-item">
                            <a id="div-btn1" style="color: white" class="nav-link tive-link hvr-underline-from-left" aria-current="page" href="#"><b><i class="fa-solid fa-circle-question"></i> Ayuda</b></a>
                        </li>
                    </ul>
                    <a id="div-btn1" style="text-decoration: none; color:white" href="#">
                        <b style="margin-right: 10px"><i class="fa-solid fa-cart-plus fa-xl" style="color: #ffffff;"></i></i> Carrito</b>
                    </a>

                </div>
            </div>
        </nav>
    </div>


    <div class="col-sm-12">
        @yield('contenido')
    </div>

    {{-- <script src="//code.tidio.co/jy4xt97e32ubz1nmeqqt4jyrjt1kvend.js" async></script> --}}
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();

    </script>   

</body>
<footer class="bg-dark text-white pt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3>Aroshop</h3>
                <hr>
                <ul class="list-unstyled text-secondary">
                    <li><a class="text-decoration-none link-secondary" href="#">Quienes somos</a></li>
                    <li><a class="text-decoration-none link-secondary" href="#">Términos y Condiciones</a></li>
                </ul>

            </div>
            <div class="col-md-4">
                <h3>Contacto</h3>
                <hr>
                <ul class="list-unstyled text-secondary">
                    <li><i class="fa-brands fa-twitter"></i> <a class="text-decoration-none link-secondary" href="">Twitter</a></li>
                    <li><i class="fa-brands fa-square-facebook"></i> <a class="text-decoration-none link-secondary" href="https://web.facebook.com/CachorroPetClinicaVeterinaria" target="_blank">Facebook</a></li>
                    <li><i class="fa-brands fa-instagram"></i> <a class="text-decoration-none link-secondary" href="">Instagram</a></li>
                    <li><i class="fa-solid fa-envelope"></i> <a class="text-decoration-none link-secondary" href="">Contacto</a></li>

            </div>
            <div class="col-md-4">
                <h3>Dirección</h3>
                <hr>
                <ul class="list-unstyled text-secondary">

                    <li>
                    <li>Adolfo López Mateos 34
                        Aviación Civil
                        43000 Huejutla, Hgo.
                        México</li>
                    </li>
                </ul>
            </div>
            <hr>
            <center><p class="text-decoration-none link-secondary">&copy; <?php echo date("Y"); ?> Todos los derechos reservados</p></center>
        </div>
    </div>
</footer>

</html>
