<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="CareMed demo project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="/plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="/styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="/styles/responsive.css">
    <link rel="stylesheet" type="text/css" href="/styles/about.css">
    <link rel="stylesheet" type="text/css" href="/styles/services.css">
    <link rel="stylesheet" type="text/css" href="/styles/contact.css">

</head>

<body>

    <div class="super_container">


        <!-- Header -->

        <header class="header trans_200">

            <!-- Top Bar -->
            <div class="top_bar">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
                                <div class="top_bar_item"><a href="#">FAQ</a></div>
                                <div class="top_bar_item"><a href="#">Solicitar uma visita</a></div>
                                <div
                                    class="emergencies  d-flex flex-row align-items-center justify-content-start ml-auto">
                                    Contacto de Emergência: +244 226 434 577</div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Header Content -->
            <div class="header_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="header_content d-flex flex-row align-items-center justify-content-start">
                                <nav class="main_nav ml-auto">
                                    <ul>
                                        <li><a href="/">Pagina Inicial</a></li>
                                        <li><a href="/sobre">Sobre Nós</a></li>
                                        <li><a href="/servicos">Nossos Serviços</a></li>
                                        <li><a href="/contactos">Contactos</a></li>
                                    </ul>
                                </nav>
                                <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Logo -->
            <div class="logo_container_outer">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="logo_container">
                                <a href="#">
                                    <div
                                        class="logo_content d-flex flex-column align-items-start justify-content-center">
                                        <div class="logo_line"></div>
                                        <img src="/images/logo.png" alt="SOS Doctor Angola">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header>

        <!-- Menu -->

        <div class="menu_container menu_mm">

            <!-- Menu Close Button -->
            <div class="menu_close_container">
                <div class="menu_close"></div>
            </div>

            <!-- Menu Items -->
            <div class="menu_inner menu_mm">
                <div class="menu menu_mm">
                    <ul class="menu_list menu_mm">
                        <li class="menu_item menu_mm"><a href="/">Pagina Incial</a></li>
                        <li class="menu_item menu_mm"><a href="/sobre">Sobre Nós</a></li>
                        <li class="menu_item menu_mm"><a href="/servicos">Nossos Serviços</a></li>
                        <li class="menu_item menu_mm"><a href="/contatcos">Contactos</a></li>
                    </ul>
                </div>
                <div class="menu_extra">
                    <div class="menu_appointment"><a href="#">Solicitar uma visita</a></div>
                    <div class="menu_emergencies">Chamada de Emergência: +244 226 434 577</div>
                </div>

            </div>

        </div>

            @if (session('msg'))
                <div class="alert alert-warning alert-dismissible fade show" style="z-index: 1000;" role="alert">
                    {{ session('msg') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            @yield('content')



        <!-- Footer -->

        <footer class="footer">
            <div class="footer_container">
                <div class="container">
                    <div class="row">

                        <!-- Footer - About -->
                        <div class="col-lg-4 footer_col">
                            <div class="footer_about">
                                <div class="footer_about_text">
                                    <p>SOS Doctor é um serviço de assistência médica ao domicílio, permitindo que o paciente seja atendido por um profissional de saúde no conforto do seu lar ou local de trabalho.</p>
                                </div>
                                <ul class="footer_about_list">
                                    <li>
                                        <div class="footer_about_icon"><img src="images/phone-call.svg" alt=""></div>
                                        <span>+244 226 434 577</span>
                                        <span>+244 939 775 996</span>
                                    </li>
                                    <li>
                                        <div class="footer_about_icon"><img src="images/envelope.svg" alt=""></div>
                                        <span>geral@sosdoctor.co.ao</span>
                                    </li>
                                    <li>
                                        <div class="footer_about_icon"><img src="images/placeholder.svg" alt=""></div>
                                        <span>Avenida Ho Chi Minh n°201, 2° andar Vila Alice</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Footer - Links -->
                        <div class="col-lg-4 footer_col">
                            <div class="footer_links footer_column">
                                <div class="footer_title">Links Uteis</div>
                                <ul>
                                    <li><a href="#">Perguntas Frequentes</a></li>
                                    <li><a href="#">Trabalha Connosco</a></li>
                                    <li><a href="#">Termos e Condições</a></li>
                                    <li><a href="#">Serviços</a></li>
                                    <li><a href="#">Sobre Nóss</a></li>
                                    <li><a href="#">Notícias</a></li>
                                    <li><a href="#">Contactos</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Footer - News -->
                        <div class="col-lg-4 footer_col">
                            <div class="footer_news footer_column">
                                <div class="footer_title">Links Direitos</div>
                                <ul>
                                    <li>
                                        <div class="footer_news_title"><a
                                                href="Atendimento: atendimento@sosdoctor.co.ao">Enviar um e-mail</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer_news_title"><a href="http://system.sosdoctor.co.ao/"
                                                target="_blank">Área Restrita</a></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div
                                class="copyright_content d-flex flex-lg-row flex-column align-items-lg-center justify-content-start">
                                <div class="cr">
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script> Todos os direitos
                                    reservados |
                                    Desenvolvido com <i class="fa fa-heart-o" aria-hidden="true"></i> pela <a
                                        href="https://colorlib.com" target="_blank">Crie Angola</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </div>
                                <div class="footer_social ml-lg-auto">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        
    </div>

    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="/styles/bootstrap4/popper.js"></script>
    <script src="/styles/bootstrap4/bootstrap.min.js"></script>
    <script src="/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="/plugins/easing/easing.js"></script>
    <script src="/plugins/parallax-js-master/parallax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
    <script src="/js/custom.js"></script>
    <script src="/js/services.js"></script>
    <script src="/js/contact.js"></script>
</body>

</html>
