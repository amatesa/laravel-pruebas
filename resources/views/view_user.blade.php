@extends('layouts/fixed_menu')

@section('title')
    Perfil
@stop
@section('header_styles')

    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/pages/profile.css')}}"/>

@stop

@section('content')
    <header class="head">
        <div class="main-bar">
            <div class="row">
                <div class="col-lg-6 col-sm-5 col-12">
                    <h4 class="nav_top_align skin_txt">
                        <i class="fa fa-user"></i>
                        Mi Perfil
                    </h4>
                </div>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6 m-t-35">
                            <div class="text-center">
                                <div class="form-group">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-new thumb_zoom zoom admin_img_width">
                                            <img class="admin_img4" src="{{asset('assets/img/profile/20171005215642_profile.jpg')}}" data-src="img/admin2.jpg" alt="not found"></div>
                                        <div class="fileinput-preview fileinput-exists thumb_zoom zoom admin_img_width"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 m-t-25">
                            <div>
                                <ul class="nav nav-inline view_user_nav_padding">
                                    <li class="nav-item card_nav_hover">
                                        <a class="nav-link active" href="#user" id="home-tab"
                                           data-toggle="tab" aria-expanded="true">Datos de usuario</a>
                                    </li>
                                    <li class="nav-item card_nav_hover">
                                        <a class="nav-link" href="#tab2" id="hats-tab" data-toggle="tab">Sobre mí</a>
                                    </li>
                                    <li class="nav-item card_nav_hover">
                                        <a class="nav-link" href="#tab3"  id="followers" data-toggle="tab">Contactos</a>
                                    </li>
                                </ul>
                                <div id="clothing-nav-content" class="tab-content m-t-10">
                                    <div role="tabpanel" class="tab-pane fade show active" id="user">
                                        <table class="table" id="users">
                                            <tr>
                                                <td>Usuario</td>
                                                <td class="inline_edit">
                                                        <span class="editable"
                                                              data-title="user-name">Alejandro</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>E-mail</td>
                                                <td>
                                                    <span class="editable" data-title="mail"></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Teléfono</td>
                                                <td>
                                                    <span class="editable" data-title="phone"></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Registrado desde:</td>
                                                <td>1 mes</td>
                                            </tr>
                                            <tr>
                                                <td>País</td>
                                                <td>
                                                    <span class="editable" data-title="pais"></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Provincia</td>
                                                <td>
                                                    <span class="editable" data-title="city"></span>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab2">
                                        <div class="card_nav_body_padding">
                                            <p>
                                                Información adicional del usuario
                                            </p>
                                            <p class="text-justify">
                                              Soy una persona responsable, cuido las cosas ajenas, y espero que otros cuiden las mias
                                            </p>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab3">
                                        <div class="card_nav_body_padding follower_images">
                                            <div class="row">
                                                <div class="">
                                                  <a href="#">
                                                      <img class="admin_img3"src="{{asset('assets/img/profile/20171013230324_profile.jpg')}}" class="rounded-circle" alt="friend">
                                                  </a>
                                                    <div class="details">
                                                        <div class="name">
                                                            <a href="#">Carlos Calvo</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="m-l-20">
                                                  <a href="#">
                                                      <img class="admin_img3"src="{{asset('assets/img/profile/20171013230324_profile.jpg')}}" class="rounded-circle" alt="friend">
                                                  </a>
                                                    <div class="details">
                                                        <div class="name">
                                                            <a href="#">Carlos Calvo 2</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="m-l-20">
                                                  <a href="#">
                                                      <img class="admin_img3"src="{{asset('assets/img/profile/20171013230324_profile.jpg')}}" class="rounded-circle" alt="friend">
                                                  </a>
                                                    <div class="details">
                                                        <div class="name">
                                                            <a href="#">Carlos Calvo 3</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
@section('footer_scripts')
@stop
