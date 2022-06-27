@extends('layouts.main')

@section('title', 'SOS Doctor - Pagina Incial')

@section('content')

    <!-- Home -->

    <div class="homemain">
        <div class="home_slider_container">
            <!-- Home Slider -->
            <div class="owl-carousel owl-theme home_slider">

                @foreach ($slides as $slide)
                    <!-- Slider Item -->
                    <div class="owl-item">
                        <div class="home_slider_background"
                            style="background-image:url(/images/slides/{{ $slide->image }})">
                        </div>
                        <div class="home_content">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="home_content_inner">
                                            <div class="home_title">
                                                <h1>{{ $slide->title }}</h1>
                                            </div>
                                            <div class="home_text">
                                                <p>{{ $slide->subtitle }}</p>
                                            </div>
                                            <div class="button home_button">
                                                <a href="#">Saiba Mais</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <!-- Slider Progress -->
            <div class="home_slider_progress"></div>
        </div>
    </div>

    <!-- 3 Boxes -->

    <div class="boxes_home">
        <div class="container">
            <div class="row">

                <!-- Box -->
                <div class="col-lg-4 box_col">
                    <div class="box working_hours_home">
                        <div class="box_icon d-flex flex-column align-items-start justify-content-center">
                            <div style="width:29px; height:29px;"><img src="images/alarm-clock.svg" alt=""></div>
                        </div>
                        <div class="box_title">Horário de Trabalho</div>
                        <div class="working_hours_list">
                            <ul>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div>Segunda – Sexta Feira</div>
                                    <div class="ml-auto">8.00 – 19.00</div>
                                </li>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div>Sabado</div>
                                    <div class="ml-auto">9.30 – 17.00</div>
                                </li>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div>Domingo</div>
                                    <div class="ml-auto">9.30 – 15.00</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Box -->
                <div class="col-lg-4 box_col">
                    <div class="box box_appointments">
                        <div class="box_icon d-flex flex-column align-items-start justify-content-center">
                            <div style="width: 29px; height:29px;"><img src="images/phone-call.svg" alt=""></div>
                        </div>
                        <div class="box_title">Compromissos</div>
                        <div class="box_text">Oferecendo uma resposta rápida e eficaz atravéz de uma simples chamada
                            telefónica, sendo o atendimento no conforto do seu lar ou local de trabalho</div>
                    </div>
                </div>

                <!-- Box -->
                <div class="col-lg-4 box_col">
                    <div class="box box_emergency">
                        <div class="box_icon d-flex flex-column align-items-start justify-content-center">
                            <div style="width: 37px; height:37px; margin-left:-4px;"><img src="images/bell.svg" alt="">
                            </div>
                        </div>
                        <div class="box_title">Caso de Emergência</div>
                        <div class="box_phone">+244 939 775 996</div>
                        <div class="box_emergency_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Curabitur ante leo.</div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- About -->

    <div class="about">
        <div class="container">
            <div class="row row-lg-eq-height">

                <!-- About Content -->
                <div class="col-lg-7">
                    <div class="about_content">
                        <div class="section_title">
                            <h2>Uma Equipa constituida por Profissionais Nacionais e Internacionais</h2>
                        </div>
                        <div class="about_text">
                            <p>O nosso corpo clínico é dotado de experiência na realização de domicílios.
                                São dotados de anos de experiência na realização de consultas médicas,
                                e estão sempre em contacto permanente com a equipa para garantir o bem estar do
                                utente.</p>
                            <p>Trabalhamos no sentido de garantir a satisfação do utente e garantir o seu
                                acompanhamento na clínica ou com consulta de médico ao domicílio.
                                Os nossos utentes apresentam elevados índices de satisfação, sendo
                                esse o principal motor da nossa motivação: procurar e manter a satisfação
                                do utente na nossa clínica em sua casa. Também dispomos de serviços de enfermagem
                                ao domicílio, para sua comodidade.</p>
                        </div>
                        <div class="button about_button">
                            <a href="#">Saiba Mais</a>
                        </div>
                    </div>
                </div>

                <!-- About Image -->
                <div class="col-lg-5">
                    <div class="about_image"><img src="images/about.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Plan -->

    <div class="departments">
        <div class="departments_background parallax-window" data-parallax="scroll" data-image-src="images/departments.jpg"
            data-speed="0.8"></div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title section_title_light">
                        <h2>Nossos Planos de Sáude</h2>
                    </div>
                </div>
            </div>
            <div class="row departments_row row-md-eq-height">
                <!-- Department -->
                <div class="col-lg-4 col-md-6 dept_col">
                    <div class="dept">
                        <div class="dept_image"><img src="/images/service_bussiness.png" alt=""></div>
                        <div class="dept_content text-center">
                            <div class="dept_title">Plano Saúde Empresarial</div>
                            <div class="dept_subtitle">Assegure o bem estar dos seus
                                colaboradores com um serviço personalizado para as
                                necessidades de cada um deles.</div>
                        </div>
                    </div>
                </div>

                <!-- Department -->
                <div class="col-lg-4 col-md-6 dept_col">
                    <div class="dept">
                        <div class="dept_image"><img src="/images/service_family.png" alt=""></div>
                        <div class="dept_content text-center">
                            <div class="dept_title">Plano Saúde Familiar</div>
                            <div class="dept_subtitle">Porque a sua fámilia é o seu maior tesouro,
                                garantir um médico de família que pode responder ás
                                necessidades de cada um é fundamental.</div>
                        </div>
                    </div>
                </div>

                <!-- Department -->
                <div class="col-lg-4 col-md-6 dept_col">
                    <div class="dept">
                        <div class="dept_image"><img src="/images/service_particular.png" alt=""></div>
                        <div class="dept_content text-center">
                            <div class="dept_title">Plano Saúde Particular</div>
                            <div class="dept_subtitle">Os planos de saúde particular são bem mais
                                fáceis de serem adquiridos. Obtenha paz de espírito com um serviço
                                moderno e sempre ao seu dispor</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Services -->

    <div class="services">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title">
                        <h2>Nossos Serviços</h2>
                    </div>
                </div>
            </div>
            <div class="row services_row">

                <!-- Service -->
                <div class="col-lg-4 col-md-6 service_col">
                    <a href="#">
                        <div class="service text-center trans_200">
                            <div class="service_icon"><img class="svg" src="images/service_1.svg" alt=""></div>
                            <div class="service_title trans_200">Clínca Geral</div>
                            <div class="service_text">
                                <!--
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ante leo,
                                                            finibus quis est ut, tempor tincidunt ipsum. Nam consequat semper sollicitudin.
                                                        </p>
                                                    -->
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Service -->
                <div class="col-lg-4 col-md-6 service_col">
                    <a href="#">
                        <div class="service text-center trans_200">
                            <div class="service_icon"><img class="svg" src="images/service_2.svg" alt=""></div>
                            <div class="service_title trans_200">Medicina Ocupacional</div>
                            <div class="service_text">
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Service -->
                <div class="col-lg-4 col-md-6 service_col">
                    <a href="#">
                        <div class="service text-center trans_200">
                            <div class="service_icon"><img class="svg" src="images/service_3.svg" alt=""></div>
                            <div class="service_title trans_200">Pediatria</div>
                            <div class="service_text">
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Service -->
                <div class="col-lg-4 col-md-6 service_col">
                    <a href="#">
                        <div class="service text-center trans_200">
                            <div class="service_icon"><img class="svg" src="images/service_4.svg" alt="">
                            </div>
                            <div class="service_title trans_200">Recuperação Pós-Covid</div>
                            <div class="service_text">
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Service -->
                <div class="col-lg-4 col-md-6 service_col">
                    <a href="#">
                        <div class="service text-center trans_200">
                            <div class="service_icon"><img class="svg" src="images/service_5.svg" alt="">
                            </div>
                            <div class="service_title trans_200">SOS QRM</div>
                            <div class="service_text">
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <!-- Call to action -->

    <div class="cta">
        <div class="cta_background parallax-window" data-parallax="scroll" data-image-src="images/cta.jpg"
            data-speed="0.8"></div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="cta_content text-center">
                        <h2>Você precisa de ajuda?</h2>
                        <div class="button cta_button"><a href="/contactos">Solicitar uma Visita</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
