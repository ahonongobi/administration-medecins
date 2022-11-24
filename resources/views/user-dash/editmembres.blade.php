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
                    <form action="{{url('editmembres/'.$membre->id)}}" method="post" id="form_sample_1" class="form-horizontal">
                        @csrf
                        <div class="form-body">
                            <div class="form-group row">
                                <label class="control-label col-md-3">Programme:
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    <input type="text" value="{{$membre->programmes}}" name="programmes" data-required="1"
                                           class="form-control" />
                                    <small class="text-warning">Très important (sensible à la casse): BetaNurse ou VentaPlus ou OncoPlus  </small>
                                    @if($errors->has('programmes'))
                                        <span class="text-danger">{{$errors->first('programmes')}}</span>
                                    @endif
                                </div>
                            </div>
							<div class="form-group row">
                                <label class="control-label col-md-3">Region :<span class="required"> * </span></label>
                                <div class="col-md-4">
                                    <input name="region"  value="{{$membre->region}}" type="text" class="form-control" />
                                    @if($errors->has('region'))
                                        <span class="text-danger">{{$errors->first('region')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Nom et prénom:
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    <input type="text" value="{{$membre->nom}}" name="name" data-required="1"
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

                                        <input type="text" value="{{$membre->birthdate}}" class="form-control" name="birthdate"
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
                                    <input name="sexe" value="{{$membre->sexe}}" type="text" class="form-control" />
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
                                    <input name="age" value="{{$membre->age}}" type="text" class="form-control" />
                                    @if($errors->has('age'))
                                        <span class="text-danger">{{$errors->first('age')}}</span>
                                    @endif
                                </div>
                            </div>
							<div class="form-group row">
                                <label class="control-label col-md-3">Date de signature :<span class="required"> * </span></label>
                                <div class="col-md-4">
                                    <input name="date_signature"  value="{{$membre->date_signature}}" type="text" class="form-control" />
                                    @if($errors->has('date_signature'))
                                        <span class="text-danger">{{$errors->first('date_signature')}}</span>
                                    @endif
                                </div>
                            </div>
							<div class="form-group row">
                                <label class="control-label col-md-3">Code patient :<span class="required"> * </span></label>
                                <div class="col-md-4">
                                    <input name="code"  value="{{$membre->code}}" type="text" class="form-control" />
                                    @if($errors->has('code'))
                                        <span class="text-danger">{{$errors->first('code')}}</span>
                                    @endif
                                </div>
                            </div>
							<div class="form-group row">
                                <label class="control-label col-md-3">Statut :<span class="required"> * </span></label>
                                <div class="col-md-4">
                                    <input name="statut"  value="{{$membre->statut}}" type="text" class="form-control" />
                                    @if($errors->has('statut'))
                                        <span class="text-danger">{{$errors->first('statut')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Adresse:
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    <input name="addresse" value="{{$membre->addresse}}" type="text" class="form-control" />
                                    @if($errors->has('addresse'))
                                        <span class="text-danger">{{$errors->first('addresse')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Department:<span class="required"> * </span></label>
                                <div class="col-md-4">
                                    <input name="departement" value="{{$membre->departement}}" type="text" class="form-control" />
                                    @if($errors->has('departement'))
                                        <span class="text-danger">{{$errors->first('departement')}}</span>
                                    @endif
                                </div>
                            </div>
							 <div class="form-group row">
                                <label class="control-label col-md-3">Nom de l'accompagnant :<span class="required"> * </span></label>
                                <div class="col-md-4">
                                    <input name="accompagnant"  value="{{$membre->accompagnant}}" type="text" class="form-control" />
                                    @if($errors->has('tel2'))
                                        <span class="text-danger">{{$errors->first('tel2')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Email:<span class="required"> * </span></label>
                                <div class="col-md-4">
                                    <input name="email"  value="{{$membre->email}}" type="text" class="form-control" />
                                    @if($errors->has('email'))
                                        <span class="text-danger">{{$errors->first('email')}}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="control-label col-md-3">Téléphone 1:<span class="required"> * </span></label>
                                <div class="col-md-4">
                                    <input name="tel"  value="{{$membre->tel}}" type="text" class="form-control" />
                                    @if($errors->has('tel'))
                                        <span class="text-danger">{{$errors->first('tel')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Téléphone 2:<span class="required"> * </span></label>
                                <div class="col-md-4">
                                    <input name="tel2"  value="{{$membre->tel2}}" type="text" class="form-control" />
                                    @if($errors->has('tel2'))
                                        <span class="text-danger">{{$errors->first('tel2')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Carte chifa:<span class="required"> * </span></label>
                                <div class="col-md-4">
                                    <input name="carte"  value="{{$membre->carte}}" type="text" class="form-control" />
                                    @if($errors->has('carte'))
                                        <span class="text-danger">{{$errors->first('carte')}}</span>
                                    @endif
                                </div>
                                <hr />
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Structure :<span class="required"> * </span></label>
                                <div class="col-md-4">
                                    <input name="etablissement"  value="{{$membre->etablissement}}" type="text" class="form-control" />
                                    @if($errors->has('etablissement'))
                                        <span class="text-danger">{{$errors->first('etablissement')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Service :<span class="required"> * </span></label>
                                <div class="col-md-4">
                                    <input name="service"  value="{{$membre->service}}" type="text" class="form-control" />
                                    @if($errors->has('service'))
                                        <span class="text-danger">{{$errors->first('service')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Medecin :<span class="required"> * </span></label>
                                <div class="col-md-4">
                                    <input name="nom_responsable"  value="{{$membre->nom_responsable}}" type="text" class="form-control" />
                                    @if($errors->has('tel2'))
                                        <span class="text-danger">{{$errors->first('tel2')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Tél Medecin :<span class="required"> * </span></label>
                                <div class="col-md-4">
                                    <input name="tele_medecin"  value="{{$membre->tele_medecin}}" type="text" class="form-control" />
                                    @if($errors->has('tel2'))
                                        <span class="text-danger">{{$errors->first('tel2')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Équipement atribué:<span class="required"> * </span></label>
                                <div class="col-md-4">
                                    <input name="equipement"  value="{{$membre->equipement}}" type="text" class="form-control" />
                                    @if($errors->has('equipement'))
                                        <span class="text-danger">{{$errors->first('equipement')}}</span>
                                    @endif
                                </div>
                            </div>
							 <div class="form-group row">
                                <label class="control-label col-md-3">Traitement en association:<span class="required"> * </span></label>
                                <div class="col-md-4">
                                    <input name="traitement_en_ass"  value="{{$membre->traitement_en_ass}}" type="text" class="form-control" />
                                    @if($errors->has('traitement_en_ass'))
                                        <span class="text-danger">{{$errors->first('traitement_en_ass')}}</span>
                                    @endif
                                </div>
                            </div>
							 <div class="form-group row">
                                <label class="control-label col-md-3">Dose optimale :<span class="required"> * </span></label>
                                <div class="col-md-4">
                                    <input name="dose_optimale"  value="{{$membre->dose_optimale}}" type="text" class="form-control" />
                                    @if($errors->has('dose_optimale'))
                                        <span class="text-danger">{{$errors->first('dose_optimale')}}</span>
                                    @endif
                                </div>
                            </div>
							 <div class="form-group row">
                                <label class="control-label col-md-3">Nombre d'inhalation :<span class="required"> * </span></label>
                                <div class="col-md-4">
                                    <input name="nombre_inhalation"  value="{{$membre->nombre_inhalation}}" type="text" class="form-control" />
                                    @if($errors->has('nombre_inhalation'))
                                        <span class="text-danger">{{$errors->first('nombre_inhalation')}}</span>
                                    @endif
                                </div>
                            </div>
							 <div class="form-group row">
                                <label class="control-label col-md-3">Séance d'éducation :<span class="required"> * </span></label>
                                <div class="col-md-4">
                                    <input name="seance_education"  value="{{$membre->seance_education}}" type="text" class="form-control" />
                                    @if($errors->has('seance_education'))
                                        <span class="text-danger">{{$errors->first('seance_education')}}</span>
                                    @endif
                                </div>
                            </div>
							 <div class="form-group row">
                                <label class="control-label col-md-3">Compréhension du programme :<span class="required"> * </span></label>
                                <div class="col-md-4">
                                    <input name="comprehension"  value="{{$membre->comprehension}}" type="text" class="form-control" />
                                    @if($errors->has('comprehension'))
                                        <span class="text-danger">{{$errors->first('comprehension')}}</span>
                                    @endif
                                </div>
                            </div>
							<div class="form-group row">
                                <label class="control-label col-md-3">Maitrise du programme:<span class="required"> * </span></label>
                                <div class="col-md-4">
                                    <input name="maitrise"  value="{{$membre->maitrise}}" type="text" class="form-control" />
                                    @if($errors->has('maitrise'))
                                        <span class="text-danger">{{$errors->first('maitrise')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Effet secondaire :
                                    <span class="required"> * </span></label>
                                <div class="col-md-4">
                                    <input name="effet"  value="{{$membre->effet}}" type="text" class="form-control" />
                                    @if($errors->has('effet'))
                                        <span class="text-danger">{{$errors->first('effet')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Mise a jour le :<span class="required"> * </span></label>
                                <div class="col-md-4">
                                    <input name="date_update"  value="{{$membre->date_update}}" type="text" class="form-control" />
                                    @if($errors->has('date_update'))
                                        <span class="text-danger">{{$errors->first('date_update')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Prochaine visite  :<span class="required"> * </span></label>
                                <div class="col-md-4">
                                    <input name="visite"  value="{{$membre->visite}}" type="text" class="form-control" />
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
