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
            {{--  any errors--}}
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
                                 Rapport journalier
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
                    <form action="{{URL('addplanpost')}}" method="post" id="form_sample_1" class="form-horizontal">
                        @csrf
                        <div class="form-body">
                            
							<div class="contact-form">

                            <div class="form-group row">
                                <label class="control-label col-md-3">Date:
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    <input type="date" value="{{old('date')}}" name="date" data-required="1"
                                           class="form-control" />
                                    @if($errors->has('date'))
                                        <span class="text-danger">{{$errors->first('date')}}</span>
                                    @endif
                                </div>


                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Mois:
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    <input type="text" value="{{old('mois')}}" name="mois" data-required="1"
                                           class="form-control" />
                                    @if($errors->has('mois'))
                                        <span class="text-danger">{{$errors->first('mois')}}</span>
                                    @endif
                                </div>


                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Type d'activité:
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    <input type="text" value="{{old('type_activite')}}" name="type_activite" data-required="1"
                                           class="form-control" />
                                    @if($errors->has('type_activite'))
                                        <span class="text-danger">{{$errors->first('type_activite')}}</span>
                                    @endif
                                </div>


                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Secteur:
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    <input type="text" value="{{old('secteur')}}" name="secteur" data-required="1"
                                           class="form-control" />
                                    @if($errors->has('secteur'))
                                        <span class="text-danger">{{$errors->first('secteur')}}</span>
                                    @endif
                                </div>


                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Services:
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    <input type="text" value="{{old('service')}}" name="service" data-required="1"
                                           class="form-control" />
                                    @if($errors->has('service'))
                                        <span class="text-danger">{{$errors->first('service')}}</span>
                                    @endif
                                </div>


                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Medecin:
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    <input type="text" value="{{old('medecin')}}" name="medecin" data-required="1"
                                           class="form-control" />
                                    @if($errors->has('medecin'))
                                        <span class="text-danger">{{$errors->first('medecin')}}</span>
                                    @endif
                                </div>


                            </div>

                            <div class="form-group row">
                                <label class="control-label col-md-3">Programme:
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    <input type="text" value="{{old('programme')}}" name="programme" data-required="1"
                                           class="form-control" />
                                    @if($errors->has('programme'))
                                        <span class="text-danger">{{$errors->first('programme')}}</span>
                                    @endif
                                </div>


                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Objectif de deplacement:
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    <input type="text" value="{{old('objectif')}}" name="objectif" data-required="1"
                                           class="form-control" />
                                    @if($errors->has('objectif'))
                                        <span class="text-danger">{{$errors->first('objectif')}}</span>
                                    @endif
                                </div>


                            </div>

                            <div class="form-group row">
                                <label class="control-label col-md-3">Observation:
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    <input type="text" value="{{old('observation')}}" name="observation" data-required="1"
                                           class="form-control" />
                                    @if($errors->has('observation'))
                                        <span class="text-danger">{{$errors->first('observation')}}</span>
                                    @endif
                                </div>


                            </div>
                           
									
                            
                            

                        </div>

                        <div class="form-group">
                            <div class="offset-md-3 col-md-9">
                                <button type="submit" class="btn btn-info m-r-20">Créer</button>
                                <a href="/addtournee" class="btn btn-default">Annuler</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end page content -->
@endsection
