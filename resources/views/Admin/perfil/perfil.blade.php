@extends('adminlte::page')

@section('title_prefix')
Perfil
@stop

@section('content_header')
    <h1 style="text-align: center;">Perfil de Usuário</h1>
@stop

@section('content')
<div class="container" style="display: flex; flex-direction: row-reverse;">
    <div class="col-lg-4 order-lg-1 text-center"  style="padding-top: 35px;" id="perfil">
            <img src="//placehold.it/150" class="mx-auto img-fluid img-circle d-block" alt="avatar">
            <h6 class="mt-2">{{$nome}}</h6>
        </div>
    <div class="row my-2">
        <div class="col-lg-8 order-lg-2">
            <div class="tab-content py-4">
                <div class="tab-pane active" id="profile">
                        <h4 class="mb-3">{{$nome}}</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Descrição</h5>
                            <p>
                                {{$descr}}
                            </p>
                            <h5>Hobbies</h5>
                            <p>
                               {{$hob}}
                            </p>
                        </div>
                        <div class="col-md-6">
                            <h6>Redes sociais</h6>
                            
                            <a href="#" class="badge badge-dark badge-pill">jquery</a>
                            <a href="#" class="badge badge-dark badge-pill">bootstrap</a>
                            <a href="#" class="badge badge-dark badge-pill">responsive-design</a>
                            <hr>
                            <span class="badge badge-primary"><i class="fa fa-user"></i> 900 Followers</span>
                            <span class="badge badge-success"><i class="fa fa-cog"></i> 43 Forks</span>
                            <span class="badge badge-danger"><i class="fa fa-eye"></i> 245 Views</span>
                        </div>
                        <div class="col-md-12">
                            <h5 class="mt-2"><span class="fa fa-clock-o ion-clock float-right"></span> Recent Activity</h5>
                            <table class="table table-sm table-hover table-striped">
                                <tbody>                                    
                                    <tr>
                                        <td>
                                            <strong>Abby</strong> joined ACME Project Team in <strong>`Collaboration`</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Gary</strong> deleted My Board1 in <strong>`Discussions`</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Kensington</strong> deleted MyBoard3 in <strong>`Discussions`</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>John</strong> deleted My Board1 in <strong>`Discussions`</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Skell</strong> deleted his post Look at Why this is.. in <strong>`Discussions`</strong>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--/row-->
                </div>
    </div>
</div>
@stop