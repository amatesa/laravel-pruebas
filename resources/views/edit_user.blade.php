@extends('layouts/fixed_menu')

@section('title')
    Editar Usuario
@stop

@section('content')
    <div class="outer">
        <div class="inner">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body m-t-25">
                            <div>
                                <h4>Información Personal</h4>
                            </div>
                            <form class="form-horizontal" id="tryitForm" action="{{url('users')}}" method="get">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group row m-t-15">
                                            <div class="col-12 col-lg-3 text-center text-lg-right">
                                                <label class="col-form-label">Foto de perfil</label>
                                            </div>
                                            <div class="col-12 col-lg-6 text-center text-lg-left m-b-20">
                                                <div class="" data-provides="fileinput">
                                                    <div class="fileinput-new img-thumbnail text-center">
                                                        <img class="admin_img4" src="{{asset('assets/img/profile/20171005215642_profile.jpg')}}" data-src="img/admin2.jpg" alt="not found">
                                                    </div>
                                                    <div class="m-t-20 text-center m-b-20">
                                                      <input type="file" name="profile_pic" id="profile_pic" required >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row m-t-50">
                                            <div class="col-12 col-lg-3 text-lg-right">
                                                <label for="u-name" class="col-form-label">Usuario</label>
                                            </div>
                                            <div class="col-12 col-xl-6 col-lg-8">
                                                <div class="input-group">
                                                        <span class="input-group-addon"> <i class="fa fa-user text-primary"></i>
                                                        </span>
                                                    <input type="text" placeholder="nombre" name="firstName" id="u-name" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12 col-lg-3 text-lg-right">
                                                <label for="email" class="col-form-label">Email
                                                </label>
                                            </div>
                                            <div class="col-12 col-xl-6 col-lg-8">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-envelope text-primary"></i></span>
                                                    <input type="text" placeholder="mail@example.com" id="email" name="email" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12 col-lg-3 text-lg-right">
                                                <label for="pwd" class="col-form-label">Contraseña</label>
                                            </div>
                                            <div class="col-12 col-xl-6 col-lg-8">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-lock text-primary"></i></span>
                                                    <input type="password" value="" name="password" id="pwd" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12 col-lg-3 text-lg-right">
                                                <label for="cpwd" class="col-form-label">Confirmar contraseña</label>
                                            </div>
                                            <div class="col-12 col-xl-6 col-lg-8">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-lock text-primary"></i></span>
                                                    <input type="password" name="confirmpassword" value="" id="cpwd" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12 col-lg-3 text-lg-right">
                                                <label for="phone" class="col-form-label">Teléfono</label>
                                            </div>
                                            <div class="col-12 col-xl-6 col-lg-8">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-phone text-primary"></i></span>
                                                    <input type="text" id="phone" name="cell" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12 col-lg-3 text-lg-right">
                                                <label for="address" class="col-form-label">País
                                                </label>
                                            </div>
                                            <div class="col-12 col-xl-6 col-lg-8">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-plus text-primary"></i></span>
                                                    <input type="text" value="" id="pais" name="pais" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12 col-lg-3 text-lg-right">
                                                <label for="city" class="col-form-label">Provincia</label>
                                            </div>
                                            <div class="col-12 col-xl-6 col-lg-8">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-plus text-primary"></i></span>
                                                    <input type="text" value="" name="provincia" id="provincia" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12 col-lg-9 ml-auto">
                                                <button class="btn btn-primary" id="submit2" type="submit">
                                                    Guardar
                                                </button>
                                                <input type="reset" class="btn btn-warning" value='Borrar' id="clear" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
