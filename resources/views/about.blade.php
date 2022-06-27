@extends('layouts.main')

@section('title', 'SOS Doctor - Pagina Incial')

@section('content')

    <!-- Home -->

    <div class="home">
        <div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/about.jpg"
            data-speed="0.8"></div>
        <div class="home_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content">
                            <div class="home_title">Sobre <span>Nós</span></div>
                            <div class="breadcrumbs">
                                <ul>
                                    <li><a href="/">Pagina Inicial</a></li>
                                    <li>Sobre Nós</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About -->

    <div class="about">
        <div class="container">
            <div class="row">

                <!-- About Content -->
                <div class="col-lg-8">
                    <div class="section_title">
                        <h2>Sobre SOS Doctor</h2>
                    </div>
                    <div class="about_text">
                        <p>É um Serviço: de assistência médica ao domicílio, permitindo que o paciente seja atendido por um
                            profissional de saúde no conforto do seu lar ou local de trabalho.</p>
                        <p>Primamos pela qualidade no atendimento e apoio multidisciplinar para os nossos pacientes,
                            cuidando-os de forma integral através da prevenção e promoção da saúde, proporcionando sempre um
                            tratamento da mais alta qualidade.</p>
                        <p>Os nossos médicos e enfermeiros acumulam mais de 5 anos de experiência nacional e internacional
                            na área de saúde, o que nos coloca em posição de oferecer, não só qualidade na experiência e
                            diversificação, mas também respeito e empatia pelos utentes que recorrem aos nossos serviços.
                        </p>
                        <p>O nosso atendimento humanizado, tem como base a medicina integral, trabalhando com equipas
                            multidisciplinares e fazendo uso de exames especiais, tais como Quantum Resonance Magnetic
                            Analizer ( QRM) uma tecnologia moderna e avançada que permite a elaboração de um diagnóstico
                            rápido, minucioso e não invasivo sobre o estado de saúde do paciente.</p>
                    </div>
                </div>
                <br>
                <br>
                <!-- About Content -->
                <div class="col-lg-8">
                    <div class="section_title">
                        <h3>Parceiros</h3>
                    </div>
                    <div class="about_text">
                        <p>Parceiros das maiores clínicas, farmácias nacionais e seguradoras internacionais.</p>
                    </div>
                </div>
                <br>
                <br>
                <!-- About Content -->
                <div class="col-lg-8">
                    <div class="section_title">
                        <h3>Visão e Missão</h3>
                    </div>
                    <div class="about_text">
                        <p>Buscar o melhor tratamento não é apenas um compromisso, mas uma rotina que colocamos em prática
                            todos os dias com cuidado e respeito aos clientes e a sociedade.</p>
                    </div>
                </div>
                <br>
                <br>
                <!-- About Content -->
                <div class="col-lg-8">
                    <div class="section_title">
                        <h3>Serviço 24H</h3>
                    </div>
                    <div class="about_text">
                        <p>Oferecendo uma resposta rápida e eficaz atravéz de uma simples chamada telefónica, sendo o
                            atendimento no conforto do seu lar ou local de trabalho. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="cta">
        <div class="cta_background parallax-window" data-parallax="scroll" data-image-src="images/cta.jpg" data-speed="0.8">
        </div>
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
