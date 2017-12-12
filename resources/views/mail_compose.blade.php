@extends('layouts/fixed_menu')
@section('title')
    Nuevo mail
@stop
@section('header_styles')
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/pages/mail_box.css')}}"/>
@stop
@section('content')
    <header class="head">
        <div class="main-bar">
            <div class="row">
                <div class="col-sm-4 col-12 skin_txt">
                    <h4 class="nav_top_align">
                        <i class="fa fa-edit"></i>
                        Nuevo Mail
                    </h4>
                </div>
              </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner">
            <div class="row web-mail mail_compose ">
                <div class="col-lg-3 mail_compose_list m-t-5">
                    <div class="mail_ul_active">
                        <ul class="list-group">
                            <li class="list-group-item bg-success">
                                <a href="#" class="mail_inbox_text_col">
                                    <i class="fa fa-comments"></i>
                                    Contactos
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <ul class="list-group contact_scroll">
                            <li class="list-group-item status_height">
                                <a href="#">
                                    <span class="status-online margin_top10"></span>
                                    &nbsp; Maximiliano
                                </a>
                            </li>
                            <li class="list-group-item status_height">
                                <a href="#">
                                    <span class="status-online margin_top10"></span>
                                    &nbsp; Sergio
                                </a>
                            </li>
                          </ul>
                    </div>
                </div>
                <div class="col-lg-9 m-t-5">
                    <div class="card media_max_991">
                        <div class="card-header bg-white">
                            <i class="fa fa-edit"></i>
                            E-mail
                        </div>
                        <div class="card-body m-t-5">
                            <form action="mail_sent">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Para *" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Cc">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control m-t-25" placeholder="Subject *" required>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control m-t-20"></textarea>
                                </div>
                                <div class="form-group m-t-20">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-reply"></i> Enviar</button>
                                    <a href="#" class="btn btn-warning"><i class="fa fa-close"></i> Cancelar</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('footer_scripts')
    <script type="text/javascript" src="{{asset('assets/js/pages/mail_box.js')}}"></script>
@stop
