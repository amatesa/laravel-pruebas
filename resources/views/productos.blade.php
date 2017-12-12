@extends('layouts/fixed_menu')

@section('title')
    Gallery
    @parent
@stop
@section('header_styles')
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/pages/productos.css')}}"/>
@stop

@section('content')
    <header class="head">
        <div class="main-bar">
            <div class="row">
                <div class="col-lg-6 col-md-4 col-sm-4">
                    <h4 class="nav_top_align">
                        <i class="fa fa-image"></i>
                        Productos
                    </h4>
                </div>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body m-t-35">
                            <div>
                                <div class="nav-tabs-custom">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item">
                                            <a href="#tab_1" class="nav-link" data-toggle="tab">Mis productos</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#tab_2" class="nav-link" data-toggle="tab">Me prestaron</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#tab_3" class="nav-link" data-toggle="tab">Buscar</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane " id="tab_1">
                                            <div class="row">
                                                <div class="">
                                                    <figure class="m-t-20 m-l-20"><img
                                                                src="{{asset('assets/img/products/apuntes.jpg')}}" alt="example-image"/>
                                                                <h4>Apuntes Facultad</h4>
                                                    </figure>
                                                </div>
                                                <div class="">
                                                    <figure class="m-t-20 m-l-20"><img
                                                                src="{{asset('assets/img/products/auto.jpg')}}" alt="example-image"/>
                                                                <h4>Auto</h4>
                                                    </figure>
                                                </div>
                                                <div class="">
                                                    <figure class="m-t-20 m-l-20"><img
                                                                src="{{asset('assets/img/products/kayak.jpg')}}" alt="example-image"/>
                                                                <h4>Kayak</h4>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab_2">
                                            <div class="row">
                                                <div class="">
                                                    <figure class="m-t-20 m-l-20"><img
                                                                src="{{asset('assets/img/products/dvd.jpg')}}" alt="example-image"/>
                                                                <h4>Saga Cell DBZ</h4>
                                                    </figure>
                                                </div>
                                                <div class="">
                                                    <figure class="m-t-20 m-l-20"><img
                                                                src="{{asset('assets/img/products/mesa-jardin.jpg')}}" alt="example-image"/>
                                                                <h4>Mesa Camping</h4>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab_3">
                                            Aca hay que poner un search
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
    <script type="text/javascript" src="{{asset('assets/js/pages/productos.js')}}"></script>
@stop
