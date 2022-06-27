@extends('layouts.main')

@section('title', 'SOS Doctor - Pagina Incial')

@section('content')

	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/services.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title"><span>Nossos</span> Serviços</div>
							<div class="breadcrumbs">
								<ul>
									<li><a href="/">Pagina Inicial</a></li>
									<li>Nossos Serviços</li>
								</ul>
							</div>
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
							<div class="service_icon"><img class="svg" src="images/service_4.svg" alt=""></div>
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
							<div class="service_icon"><img class="svg" src="images/service_5.svg" alt=""></div>
							<div class="service_title trans_200">SOS QRM</div>
							<div class="service_text">
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>

	
	<div class="departments">
		<div class="departments_background parallax-window" data-parallax="scroll"
			data-image-src="images/departments.jpg" data-speed="0.8"></div>
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
