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
			
            <!-- shwo error of any field -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

        <div class="col-md-12 col-sm-12">
            <div class="card card-box">
                <div class="card-head">
                   <header>
							     <i class="fa fa-undo" aria-hidden="true"></i>
								 <a href="javascript:history.back()">Page précédente</a>
								 <i class="fa fa-angle-right"></i>
                                 Detail du visite
					</header>
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
                    <form action="{{route('editVisite')}}" method="post" id="form_sample_1" class="form-horizontal">
                        @csrf
                        <input type="hidden" name="id" value="{{$visite->id}}">
                        <div class="form-body">
                            <div class="form-group row">
                                <label class="control-label col-md-3">Choisir un programme: 
                                    <span class="required"> * </span>
                                </label>

                                <div class="col-md-4">
                                    <select name="programmes" class="form-control">
                                        <option value="BetaNurse">BetaNurse</option>
                                        <option value="VentaPlus">VentaPlus</option>
                                        <option value="OncoPlus">OncoPlus</option>
                                    </select>

                                    @if($errors->has('programmes'))
                                        <span class="text-danger">{{$errors->first('programmes')}}</span>
                                    @endif
                                </div>
                            </div>
							<div class="contact-form">

                            <div class="form-group row">
                                <label class="control-label col-md-3">Choisir un patien: 
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    

                                    <select name="nom_prenom" class="form-control">
                                        @foreach($membersinfo as $item)
                                            <option value="{{$item->nom}}">{{$item->nom}}</option>
                                        @endforeach
                                        
                                    </select>

                                    @if($errors->has('nom_prenom'))
                                        <span class="text-danger">{{$errors->first('nom_prenom')}}</span>
                                    @endif
                                </div>


                            </div>

                            <div class="form-group row">
                                <label class="control-label col-md-3">Mail du patien: 
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    

                                    <select name="mail" class="form-control">
                                        @foreach($membersinfo as $item)
                                            <option value="{{$item->email}}">{{$item->email}}</option>
                                        @endforeach
                                        
                                    </select>

                                    @if($errors->has('mail'))
                                        <span class="text-danger">{{$errors->first('mail')}}</span>
                                    @endif
                                </div>


                            </div>
									
                            <div class="form-group row">
                                <label class="control-label col-md-3">Date de visite: 
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    <div class="input-group">

                                        <input type="date" value="{{old('date_visite')}}" class="form-control" name="date_visite"
                                               placeholder="" />
                                        @if($errors->has('date_visite'))
                                            <span class="text-danger">{{$errors->first('date_visite')}}</span>
                                        @endif
                                    </div>

                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="control-label col-md-3">Type de visite: 
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                      <select  value="{{old('type_visite')}}" class="form-control" name="type_visite">
                                        <option value="">Selectionnez...</option>
                                        <option value="Structure">Structure</option>
                                        <option value="Téléphonique">Téléphonique </option>
                                        <option value="Domicile">Domicile</option>
                                    </select>

                                    @if($errors->has('type_visite'))
                                        <span class="text-danger">{{$errors->first('type_visite')}}</span>
                                    @endif

                                </div>
                            </div>
							 <div class="form-group row">
                                <label class="control-label col-md-3">Lieu de visite: 
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    <input name="lieu_visite" value="{{$visite->lieu_visite ?? ""}}" type="text" class="form-control" />
                                    @if($errors->has('lieu_visite'))
                                        <span class="text-danger">{{$errors->first('lieu_visite')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Dose: 
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    <input name="dose" value="{{$visite->dose ?? ""}}" type="text" class="form-control" />
                                    @if($errors->has('dose'))
                                        <span class="text-danger">{{$errors->first('dose')}}</span>
                                    @endif
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
