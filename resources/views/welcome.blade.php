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
                        <div class="box_title">Hor??rio de Trabalho</div>
                        <div class="working_hours_list">
                            <ul>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div>Segunda ??? Sexta Feira</div>
                                    <div class="ml-auto">8.00 ??? 19.00</div>
                                </li>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div>Sabado</div>
                                    <div class="ml-auto">9.30 ??? 17.00</div>
                                </li>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div>Domingo</div>
                                    <div class="ml-auto">9.30 ??? 15.00</div>
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
                        <div class="box_text">Oferecendo uma resposta r??pida e eficaz atrav??z de uma simples chamada
                            telef??nica, sendo o atendimento no conforto do seu lar ou local de trabalho</div>
                    </div>
                </div>

                <!-- Box -->
                <div class="col-lg-4 box_col">
                    <div class="box box_emergency">
                        <div class="box_icon d-flex flex-column align-items-start justify-content-center">
                            <div style="width: 37px; height:37px; margin-left:-4px;"><img src="images/bell.svg" alt="">
                            </div>
                        </div>
                        <div class="box_title">Caso de Emerg??ncia</div>
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
                            <p>O nosso corpo cl??nico ?? dotado de experi??ncia na realiza????o de domic??lios.
                                S??o dotados de anos de experi??ncia na realiza????o de consultas m??dicas,
                                e est??o sempre em contacto permanente com a equipa para garantir o bem estar do
                                utente.</p>
                            <p>Trabalhamos no sentido de garantir a satisfa????o do utente e garantir o seu
                                acompanhamento na cl??nica ou com consulta de m??dico ao domic??lio.
                                Os nossos utentes apresentam elevados ??ndices de satisfa????o, sendo
                                esse o principal motor da nossa motiva????o: procurar e manter a satisfa????o
                                do utente na nossa cl??nica em sua casa. Tamb??m dispomos de servi??os de enfermagem
                                ao domic??lio, para sua comodidade.</p>
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
                        <h2>Nossos Planos de S??ude</h2>
                    </div>
                </div>
            </div>
            <div class="row departments_row row-md-eq-height">
                <!-- Department -->
                <div class="col-lg-4 col-md-6 dept_col">
                    <div class="dept">
                        <div class="dept_image"><img src="/images/service_bussiness.png" alt=""></div>
                        <div class="dept_content text-center">
                            <div class="dept_title">Plano Sa??de Empresarial</div>
                            <div class="dept_subtitle">Assegure o bem estar dos seus
                                colaboradores com um servi??o personalizado para as
                                necessidades de cada um deles.</div>
                        </div>
                    </div>
                </div>

                <!-- Department -->
                <div class="col-lg-4 col-md-6 dept_col">
                    <div class="dept">
                        <div class="dept_image"><img src="/images/service_family.png" alt=""></div>
                        <div class="dept_content text-center">
                            <div class="dept_title">Plano Sa??de Familiar</div>
                            <div class="dept_subtitle">Porque a sua f??milia ?? o seu maior tesouro,
                                garantir um m??dico de fam??lia que pode responder ??s
                                necessidades de cada um ?? fundamental.</div>
                        </div>
                    </div>
                </div>

                <!-- Department -->
                <div class="col-lg-4 col-md-6 dept_col">
                    <div class="dept">
                        <div class="dept_image"><img src="/images/service_particular.png" alt=""></div>
                        <div class="dept_content text-center">
                            <div class="dept_title">Plano Sa??de Particular</div>
                            <div class="dept_subtitle">Os planos de sa??de particular s??o bem mais
                                f??ceis de serem adquiridos. Obtenha paz de esp??rito com um servi??o
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
                        <h2>Nossos Servi??os</h2>
                    </div>
                </div>
            </div>
            <div class="row services_row">

                <!-- Service -->
                <div class="col-lg-4 col-md-6 service_col">
                    <a href="#">
                        <div class="service text-center trans_200">
                            <div class="service_icon"><img class="svg" src="images/service_1.svg" alt=""></div>
                            <div class="service_title trans_200">Cl??nca Geral</div>
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
                            <div class="service_title trans_200">Recupera????o P??s-Covid</div>
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
                        <h2>Voc?? precisa de ajuda?</h2>
                        <div class="button cta_button"><a href="/contactos">Solicitar uma Visita</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
