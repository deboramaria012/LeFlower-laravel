@extends('layout.layout')

@section('title','home')

@section('conteudo')

<link rel="stylesheet" type="text/css" href="{{ asset('/css/estilo.css') }}">


<div class="team-area-1 space">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title">Equipe LeFlower</span>

        </div>
        <div class="row global-carousel team-slider-1 slider-shadow" data-slide-show="4" data-ml-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1" data-center-mode="true">
            <div class="col-lg-4 col-md-6">
                <div class="team-card">
                    <div class="team-card_img">
                        <img src="{{ asset('assets/barbeiro1.jpg') }}" alt="img">
                    </div>
                    <div class="team-card_content">
                        <h4 class="team-card_title"><a href="team-details.html">Vitor</a>
                        </h4>
                        <span class="team-card_desig">Barbeiro</span>
                        <div class="social-btn">
                            <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-card">
                    <div class="team-card_img">
                        <img src="{{ asset('assets/manicure.jpg') }}" alt="img">
                    </div>
                    <div class="team-card_content">
                        <h4 class="team-card_title"><a href="team-details.html">Alana</a>
                        </h4>
                        <span class="team-card_desig">Manicure</span>
                        <div class="social-btn">
                            <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-card">
                    <div class="team-card_img">
                        <img src="{{ asset('assets/maquiadora.jpg') }}" alt="img">
                    </div>
                    <div class="team-card_content">
                        <h4 class="team-card_title"><a href="team-details.html">Maria</a>
                        </h4>
                        <span class="team-card_desig">Maquiadora</span>
                        <div class="social-btn">
                            <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-card">
                    <div class="team-card_img">
                        <img src="{{ asset('assets/massagista.jpg') }}" alt="img">
                    </div>
                    <div class="team-card_content">
                        <h4 class="team-card_title"><a href="team-details.html">Julia</a>
                        </h4>
                        <span class="team-card_desig">Massagista</span>
                        <div class="social-btn">
                            <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-card">
                    <div class="team-card_img">
                        <img src="{{ asset('assets/cabelo.jpg') }}" alt="img">
                    </div>
                    <div class="team-card_content">
                        <h4 class="team-card_title"><a href="team-details.html">Ana</a>
                        </h4>
                        <span class="team-card_desig">Cabeleleira</span>
                        <div class="social-btn">
                            <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-card">
                    <div class="team-card_img">
                        <img src="{{ asset('assets/depilação.jpg') }}" alt="img">
                    </div>
                    <div class="team-card_content">
                        <h4 class="team-card_title"><a href="team-details.html">joana</a>
                        </h4>
                        <span class="team-card_desig">depiladora</span>
                        <div class="social-btn">
                            <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-card">
                    <div class="team-card_img">
                        <img src="{{ asset('assets/estetica.jpg') }}" alt="img">
                    </div>
                    <div class="team-card_content">
                        <h4 class="team-card_title"><a href="team-details.html">Luana</a>
                        </h4>
                        <span class="team-card_desig">estetica</span>
                        <div class="social-btn">
                            <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-card">
                    <div class="team-card_img">
                        <img src="{{ asset('assets/design.jpg') }}" alt="img">
                    </div>
                    <div class="team-card_content">
                        <h4 class="team-card_title"><a href="team-details.html">Estela</a>
                        </h4>
                        <span class="team-card_desig">Design</span>
                        <div class="social-btn">
                            <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<link rel="stylesheet" href="{{ asset('css/estilohorario.css') }}">

<div id="opening-hours" class="opening-hours section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>Horário de Funcionamento</h2>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="opening-hours-box">
            <div class="opening-hours-content">
              <div class="opening-hour">
                <h2>Segunda-feira</h2>
                <p>8h30 - 12h00</p>
                <p>13h00 - 17h00</p>
              </div>
              <div class="opening-hour">
                <h2>Terça-feira</h2>
                <p>8h30 - 12h00</p>
                <p>13h00 - 17h00</p>
              </div>
              <div class="opening-hour">
                <h2>Quarta-feira</h2>
                <p>8h30 - 12h00</p>
                <p>13h00 - 17h00</p>
              </div>
              <div class="opening-hour">
                <h2>Quinta-feira</h2>
                <p>8h30 - 12h00</p>
                <p>13h00 - 17h00</p>
              </div>
              <div class="opening-hour">
                <h2>Sexta-feira</h2>
                <p>8h30 - 12h00</p>
                <p>13h00 - 17h00</p>
              </div>
              <div class="opening-hour">
                <h2>Sábado e Domingo</h2>
                <p>Fechado</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


<script src="{{ asset('js/scriptcarrosel.js') }}"></script>

@endsection
