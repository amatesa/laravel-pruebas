@extends('layouts/fixed_menu')
@section('title')
    Inbox
@stop
@section('header_styles')
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/pages/mail_box.css')}}"/>
@stop

@section('content')
    <header class="head">
        <div class="main-bar">
            <div class="row">
                <div class="col-sm-4">
                    <h4 class="nav_top_align">
                        <i class="fa fa-inbox"></i>
                        Bandeja de entrada
                    </h4>
                </div>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner">
            <div class="row web-mail">
                <div class="col-lg-3 mail_compose_list">
                    <div class="mail_ul_active m-t-5">
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
                                    <span class="status-online m-t-10"></span>
                                    &nbsp; Maximiliano
                                </a>
                            </li>
                            <li class="list-group-item status_height">
                                <a href="#">
                                    <span class="status-online m-t-10"></span>
                                    &nbsp; Sergio
                            </li>
                          </ul>
                    </div>
                </div>
                <div class="col-lg-9 m-t-5">
                    <div class="card mail media_max_991">
                        <div class="card-body m-t-25 p-d-0">
                            <div class="tabs tabs-bordered">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item " id="primary2">
                                        <a href="#primary" class="nav-link active" data-toggle="tab"
                                           aria-expanded="true"><i class="fa fa-inbox"></i> Principal</a>
                                    </li>
                                    <li class="nav-item" id="social2">
                                        <a href="#social" class="nav-link" data-toggle="tab"
                                           aria-expanded="false"><i class="fa fa-group"></i> Social</a>
                                    </li>
                                    <li class="nav-item" id="promotions2">
                                        <a href="#promotions" class="nav-link" data-toggle="tab"
                                           aria-expanded="false"><i class="fa fa-star"></i> Promociones</a>
                                    </li>
                                </ul>

                                <!-- Tabs -->
                                <div class="tab-content">
                                    <div class="tab-pane table-responsive reset padding-all fade active show"
                                         id="primary">
                                        <table class="table">
                                            <tbody>
                                            <tr class="mail-unread">
                                                <td>
                                                    <div class="checker m-l-20">
                                                        <label class="custom-control custom-checkbox">
                                                            <input name="checkbox" type="checkbox"
                                                                   class="custom-control-input ">
                                                            <span class="custom-control-indicator"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td><i class="fa fa-star"></i></td>
                                                <td class="sent_to_mailview">Prueba</td>
                                                <td class="sent_to_mailview">Correo de prueba</td>
                                                <td class="sent_to_mailview"></td>
                                                <td class="sent_to_mailview">11/12/2017</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane table-responsive reset padding-all fade"
                                         id="social">
                                        <table class="table">
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane table-responsive reset padding-all fade"
                                         id="promotions">
                                        <table class="table">
                                            <tbody>
                                            </tbody>
                                        </table>
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
