@extends('_layouts._indexuser')
@section('content')
    <div class="row">
        @if(Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> {{ Session::get('success') }}

            </div>
        @endif
            @if(Session::has('error'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> {{ Session::get('error') }}

                </div>
            @endif
        <div class="col-md-12 col-sm-12">
            <div class="card card-box">
                <div class="card-head">
                    <header>DETAILS DU PATIENT</header>
                    <!-- alert success message if session has success -->

                    <button id="panel-button1"
                            class="mdl-button mdl-js-button mdl-button--icon pull-right"
                            data-upgraded=",MaterialButton">
                        <i class="material-icons">more_vert</i>
                    </button>
                    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                        data-mdl-for="panel-button1">
                        <li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action
                        </li>
                        <li class="mdl-menu__item"><i class="material-icons">print</i>Another action
                        </li>
                        <li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else
                            here</li>
                    </ul>
                </div>
                <div class="card-body" id="bar-parent1">
                    <form action="{{route('send')}}" method="post" id="form_sample_1" class="form-horizontal">
                        @csrf
                        <div class="form-body">
                            <div class="form-group row">
                                <label class="control-label col-md-3">Nom et prénom:
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    <input type="text" value="{{old('name')}}" name="name" data-required="1"
                                           class="form-control" />
                                    @if($errors->has('name'))
                                        <span class="text-danger">{{$errors->first('name')}}</span>
                                    @endif
                                </div>


                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Date de naissance:
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    <div class="input-group">

                                        <input type="text" value="{{old('birthdate')}}" class="form-control" name="birthdate"
                                               placeholder="" />
                                        @if($errors->has('birthdate'))
                                            <span class="text-danger">{{$errors->first('birthdate')}}</span>
                                        @endif
                                    </div>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Sexe:
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                      <select name="sexe" value="{{old('sexe')}}" class="form-control" name="sexe">
                                        <option value="">Selectionnez...</option>
                                        <option value="Masculin">Masculin</option>
                                        <option value="Féminin">Feminin</option>
                                    </select>

                                    @if($errors->has('sexe'))
                                        <span class="text-danger">{{$errors->first('sexe')}}</span>
                                    @endif

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Age:
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    <input name="age" value="{{old('age')}}" type="text" class="form-control" />
                                    @if($errors->has('age'))
                                        <span class="text-danger">{{$errors->first('age')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Adresse:
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    <input name="addresse" value="{{old('addresse')}}" type="text" class="form-control" />
                                    @if($errors->has('addresse'))
                                        <span class="text-danger">{{$errors->first('addresse')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Department:<span class="required"> * </span></label>
                                <div class="col-md-4">
                                    <input name="departement" value="{{old('departement')}}" type="text" class="form-control" />
                                    @if($errors->has('departement'))
                                        <span class="text-danger">{{$errors->first('departement')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Email:<span class="required"> * </span></label>
                                <div class="col-md-4">
                                    <input name="email"  value="{{old('email')}}" type="text" class="form-control" />
                                    @if($errors->has('email'))
                                        <span class="text-danger">{{$errors->first('email')}}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="control-label col-md-3">Téléphone 1:<span class="required"> * </span></label>
                                <div class="col-md-4">
                                    <input name="tel"  value="{{old('tel1')}}" type="text" class="form-control" />
                                    @if($errors->has('tel'))
                                        <span class="text-danger">{{$errors->first('tel')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Téléphone 2:<span class="required"> * </span></label>
                                <div class="col-md-4">
                                    <input name="tel2"  value="{{old('tel2')}}" type="text" class="form-control" />
                                    @if($errors->has('tel2'))
                                        <span class="text-danger">{{$errors->first('tel2')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Carte assurance : oui - non:<span class="required"> * </span></label>
                                <div class="col-md-4">
                                    <input name="carte"  value="{{old('carte')}}" type="text" class="form-control" />
                                    @if($errors->has('carte'))
                                        <span class="text-danger">{{$errors->first('carte')}}</span>
                                    @endif
                                </div>
                                <hr />
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Etablissement :<span class="required"> * </span></label>
                                <div class="col-md-4">
                                    <input name="etablissement"  value="{{old('etablissement')}}" type="text" class="form-control" />
                                    @if($errors->has('etablissement'))
                                        <span class="text-danger">{{$errors->first('etablissement')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Service :<span class="required"> * </span></label>
                                <div class="col-md-4">
                                    <input name="service"  value="{{old('service')}}" type="text" class="form-control" />
                                    @if($errors->has('service'))
                                        <span class="text-danger">{{$errors->first('service')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Nom du responsible :<span class="required"> * </span></label>
                                <div class="col-md-4">
                                    <input name="nom_responsable"  value="{{old('nom_responsable')}}" type="text" class="form-control" />
                                    @if($errors->has('tel2'))
                                        <span class="text-danger">{{$errors->first('tel2')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Valable : oui - non<span class="required"> * </span></label>
                                <div class="col-md-4">
                                    <input name="valable"  value="{{old('valable')}}" type="text" class="form-control" />
                                    @if($errors->has('valable'))
                                        <span class="text-danger">{{$errors->first('valable')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Arret : oui - non:<span class="required"> * </span></label>
                                <div class="col-md-4">
                                    <input name="arret"  value="{{old('arret')}}" type="text" class="form-control" />
                                    @if($errors->has('arret'))
                                        <span class="text-danger">{{$errors->first('arret')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Disponibilité oui- non:<span class="required"> * </span></label>
                                <div class="col-md-4">
                                    <input name="disponible"  value="{{old('disponible')}}" type="text" class="form-control" />
                                    @if($errors->has('disponible'))
                                        <span class="text-danger">{{$errors->first('disponible')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Équipement atribué:<span class="required"> * </span></label>
                                <div class="col-md-4">
                                    <input name="equipement"  value="{{old('equipement')}}" type="text" class="form-control" />
                                    @if($errors->has('equipement'))
                                        <span class="text-danger">{{$errors->first('equipement')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Effet secondaire :
                                    <span class="required"> * </span></label>
                                <div class="col-md-4">
                                    <input name="effet"  value="{{old('effet')}}" type="text" class="form-control" />
                                    @if($errors->has('effet'))
                                        <span class="text-danger">{{$errors->first('effet')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Mise a jour le :<span class="required"> * </span></label>
                                <div class="col-md-4">
                                    <input name="date_update"  value="{{old('date_update')}}" type="text" class="form-control" />
                                    @if($errors->has('date_update'))
                                        <span class="text-danger">{{$errors->first('date_update')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Prochaine visite  :<span class="required"> * </span></label>
                                <div class="col-md-4">
                                    <input name="visite"  value="{{old('visite')}}" type="text" class="form-control" />
                                    @if($errors->has('visite'))
                                        <span class="text-danger">{{$errors->first('visite')}}</span>
                                    @endif
                                </div>
                            </div>

                        </div>

                        <div class="form-group">
                            <div class="offset-md-3 col-md-9">
                                <button type="submit" class="btn btn-info m-r-20">Valider</button>
                                <a href="/user" class="btn btn-default">Annuler</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end page content -->
@endsection
