@extends('layouts.app')
@section('title')
    Home
@stop

@section('header_styles')
  <link rel="stylesheet" href="assets/css/slider/style.css">
  <link rel="stylesheet" href="assets/css/slider/pi-slider-images-full-width.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:300,400,600">
@stop


@section('content')

<div class="containerSlider">
        <div class="pi-slider-images-full-width" id="sliderImagesFullWidth">
          <div class="items">
              <div class="item">
                <div class="text-slider">
                  <div>
                    <h2>Prestalo con GANAS</h2>
                  </div>
                </div>
                  <img src="{{asset ('assets/img/intercambio.jpg')}}" width="100%" />
              </div>
              <div class="item">
                  <img src="{{asset ('assets/img/friends.jpg')}}" width="100%"/>
                  <div class="text-slider">
                    <div>
                      <h2>Comparti con tus amigos eso que ya no usas</h2>
                    </div>
                  </div>
              </div>
              <div class="item">
                  <img src="{{asset ('assets/img/bicicleta.jpg')}}" width="100%" />
                  <div class="text-slider">
                    <div>
                      <h2>Lo queres, lo pedis, lo tenes!</h2>
                    </div>
                  </div>
              </div>
          </div>
          <div class="buttons">
              <button><!-- Left --></button>
              <button><!-- Right --></button>
          </div>
        </div>
    </div>
        {{-- <div class="container">
          <div class="backgroundIndex">
              <img src="{{asset ('assets/img/intercambio.jpg')}}" width="100%" />
          </div>
        </div>
        <div class="cabecera-index">
          <div>
            <h2>Prestalo con GANAS</h2>
            <h3>Lo queres, lo pedis, lo tenes!</h3>
          </div>
        </div> --}}

      <div class="cuerpo-index">
        <h2>¿Qué es Borrowin?</h2>
        <br>
        <p>Es una red social de prestamos entre amigos!<br>
        Imagina que necesitas algo, y no queres comprarlo, ¿Algún amigo tuyo podría tenerlo?<br>
        Es cuestión de pedirlo, buscarlo, usarlo y luego devolverlo.<br>
        Esa bicicleta que necesitas este fin de semana, o ese libro que queres leer,<br>
        estan al alcance de la mano. Y claro, vos también podes prestar</p>
      </div>
@stop
@section('footer_scripts')
    <script src="{{'assets/js/piSliderJS.min.js'}}"></script>
    <script src="{{'assets/js/pages/slider.js'}}"></script>
@stop
