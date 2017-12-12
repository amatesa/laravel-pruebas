@extends('layouts/fixed_menu')
@section('title')
  Contactos
@stop
@section('content')
    <header class="head">
        <div class="main-bar">
            <div class="row">
                <div class="col-lg-6 col-sm-4">
                    <h4 class="nav_top_align">
                        <i class="fa fa-user"></i>
                        Contactos
                    </h4>
                </div>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container">
            <div class="card">
                <div class="card-body m-t-35" id="user_body">
                    <div>
                        <div>
                            <table class="table  table-striped table-bordered table-hover dataTable no-footer" id="editable_table" role="grid">
                                <thead>
                                <tr role="row">
                                    <th class="sorting_asc wid-20" tabindex="0" rowspan="1" colspan="1">Username</th>
                                    <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1">E-Mail</th>
                                    <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1">Teléfono</th>
                                    <th class="sorting wid-20" tabindex="0" rowspan="1" colspan="1">País</th>
                                    <th class="sorting wid-20" tabindex="0" rowspan="1" colspan="1">Provincia</th>
                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Acciones</th>
                                </tr>
                                </thead>
                                <tbody><tr role="row" class="even">
                                  <td class="">Maximiliano</td>
                                  <td>maxzap@gmail.com</td>
                                  <td>11-1111-1111</td>
                                  <td class="center">Argentina</td>
                                  <td class="center">Buenos Aires</td>
                                  <td><a href="view_user" title="Ver Perfil"><i class="fa fa-eye text-success"></i></a>&nbsp;&nbsp;
                                      <a class="delete hidden-xs hidden-sm" title="Borrar" href="#"><i class="fa fa-trash text-danger"></i></a></td></tr></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
