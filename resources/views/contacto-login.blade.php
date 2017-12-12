@extends('layouts.fixed_menu')
@section('title')
  Index
@stop
@section('content')
    <header class="head">
        <div class="main-bar">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="nav_top_align">
                        <i class="fa fa-comments"></i>
                        Contacto
                    </h4>
                </div>
            </div>
        </div>
    </header>
        <div class="container">
            <div class="backgroundContacto">
              <img src="{{asset ('assets/img/contacto.jpg')}}" width="100%" />
            </div>
            <div class="contactPage">
              <div class="contact_form">
                <div class="backgroundContactForm">
                  <h2 class="title-nav">Contactate con nosotros</h2>
                  <form class="contact" action="index.html" method="post">
                    <label for="name">Nombre</label><br>
                    <input id="name" type="text" name="name" value="">
                    <br>
                    <label for="email">E-mail </label><br>
                    <input id="email" type="text" name="email" value="">
                    <br>
                  </form>
                  <label class="comment" for="comment">Mensaje</label>
                  <textarea></textarea>
                  <button type="submit" name="button">Enviar</button>
                </div>
              </div>
            </div>
          </div>
  @stop
