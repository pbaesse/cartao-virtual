@extends('adminlte::page')

@section('title_prefix')
Perfil
@stop


@section('content_header')
    <h1 style="text-align: center;">Perfil de Usuário</h1>
@stop

@section('content')
<div class="container">
    <div class="row my-2">
        <div class="col-lg-8 order-lg-2">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="" data-target="#profile" data-toggle="tab" class="nav-link active">Perfil</a>
                </li>
                <li class="nav-item">
                    <a href="" data-target="#edit" data-toggle="tab" class="nav-link">Edite</a>
                </li>
            </ul>
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
                <div class="tab-pane" id="edit">
                    <form role="form">
                    <div class="col-lg-4 order-lg-1 text-center" style="width: 700px; margin-bottom: 20px; padding-left: ">
                         <img src="//placehold.it/150" class="mx-auto img-fluid img-circle d-block" alt="avatar">
                         <input type="file" id="file" class="" style="width: 400px; margin-top: 20px;">
                     </div>             
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Nome</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Sobrenome</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Cidade</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Data de nascimento</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="date" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                           <label for="testeAreaDescr" class="col-lg-3 col-form-label form-control-label">Hobbies</label>
                           <textarea class="form-control" id="description" name="hobbies" rows="3" placeholder="Informe seus hobbies aqui"></textarea>
                         </div>
                         <div class="form-group row">
                           <label for="testeAreaDescr" class="col-lg-3 col-form-label form-control-label">Descrição</label>
                           <textarea class="form-control" id="description" name="descricao" rows="3" placeholder="Faça uma descrição sobre você"></textarea>
                         </div>

                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-9">
                                <input type="reset" class="btn btn-secondary" value="Cancel">
                                <input type="button" class="btn btn-primary" value="Salve as mudanças">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4 order-lg-1 text-center">
            <img src="//placehold.it/150" class="mx-auto img-fluid img-circle d-block" alt="avatar">
            <h6 class="mt-2">{{$nome}}</h6>
        </div>
    </div>
</div>
@stop