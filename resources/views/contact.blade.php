@extends('layouts.main')

@section('title', 'SOS Doctor - Contactos')

@section('content')

    <!-- Home -->

    <div class="home">
        <div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/contact.jpg"
            data-speed="0.8"></div>
        <div class="home_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content">
                            <div class="home_title"><span>Fala</span> Connosco</div>
                            <div class="breadcrumbs">
                                <ul>
                                    <li><a href="/">Pagina Inicial</a></li>
                                    <li>Fala Connosco</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact -->

    <div class="contact">
        <div class="container">
            <div class="row">

                <!-- Contact Info -->
                <div class="col-lg-6">
                    <div class="section_title">
                        <h2>Fala Connosco</h2>
                    </div>
                    <div class="contact_text">
                        <p>SOS Doctor é um serviço de assistência médica ao domicílio, permitindo que o paciente seja
                            atendido por um profissional de saúde no conforto do seu lar ou local de trabalho.</p>
                    </div>
                    <ul class="contact_about_list">
                        <li>
                            <div class="contact_about_icon"><img src="images/phone-call.svg" alt=""></div><span>+244 939 775
                                996</span>
                        </li>
                        <li>
                            <div class="contact_about_icon"><img src="images/envelope.svg" alt=""></div>
                            <span>geral@sosdoctor.co.ao</span>
                        </li>
                        <li>
                            <div class="contact_about_icon"><img src="images/placeholder.svg" alt=""></div><span>Avenida Ho
                                Chi Minh n°201, 2° andar Vila Alice</span>
                        </li>
                    </ul>
                </div>

                <!-- Contact Form -->
                <div class="col-lg-6 form_col">
                    <div class="contact_form_container">
                        <form action="#" id="contact_form" class="contact_form">
                            <div class="row">
                                <div class="col-md-6 input_col">
                                    <div class="input_container input_name"><input type="text" class="contact_input"
                                            placeholder="Nome" required="required"></div>
                                </div>
                                <div class="col-md-6 input_col">
                                    <div class="input_container"><input type="email" class="contact_input"
                                            placeholder="E-mail" required="required"></div>
                                </div>
                            </div>
                            <div class="input_container"><input type="text" class="contact_input" placeholder="Assunto"
                                    required="required"></div>
                            <div class="input_container">
                                <textarea class="contact_input contact_text_area" placeholder="Mensagem" required="required"></textarea>
                            </div>
                            <button class="button contact_button"><a href="#">ENVIAR</a></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row map_row">
                <div class="col">

                    <!-- Contact Map -->

                    <div class="contact_map">

                        <!-- Google Map -->

                        <div class="map">
                            <div id="google_map" class="google_map">
                                <div class="map_container">
                                    <div id="map"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Working Hours -->
                        <div class="box working_hours">
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
                </div>
            </div>
        </div>
        <br />
        <br />
        <br />
        <br />

    @endsection
