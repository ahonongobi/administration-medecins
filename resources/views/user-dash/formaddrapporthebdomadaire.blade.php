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
                    <form action="{{URL('addrepporthebdomadairepost')}}" method="post" id="form_sample_1" class="form-horizontal">
                        @csrf
                        <div class="form-body">
                            
							<div class="contact-form">

                            <div class="form-group row">
                                <label class="control-label col-md-3">Date du rapport:
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    <input type="text" value="{{old('date_rapport')}}" name="date_rapport" data-required="1"
                                           class="form-control" />
                                    @if($errors->has('date_rapport'))
                                        <span class="text-danger">{{$errors->first('date_rapport')}}</span>
                                    @endif
                                </div>


                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Code du rapport:
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    <input type="text" value="{{old('code_rapport')}}" name="code_rapport" data-required="1"
                                           class="form-control" />
                                    @if($errors->has('code_rapport'))
                                        <span class="text-danger">{{$errors->first('code_rapport')}}</span>
                                    @endif
                                </div>


                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">PSDMP:
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    <input type="text" value="{{old('psdmp')}}" name="psdmp" data-required="1"
                                           class="form-control" />
                                    @if($errors->has('psdmp'))
                                        <span class="text-danger">{{$errors->first('psdmp')}}</span>
                                    @endif
                                </div>


                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">PSDMP Région:
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    <input type="text" value="{{old('psdmp_region')}}" name="psdmp_region" data-required="1"
                                           class="form-control" />
                                    @if($errors->has('psdmp_region'))
                                        <span class="text-danger">{{$errors->first('psdmp_region')}}</span>
                                    @endif
                                </div>


                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Nombres des patients:
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    <input type="text" value="{{old('nombre_patient')}}" name="nombre_patient" data-required="1"
                                           class="form-control" />
                                    @if($errors->has('tache_5'))
                                        <span class="text-danger">{{$errors->first('nombre_patient')}}</span>
                                    @endif
                                </div>


                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Semaine:
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    <input type="text" value="{{old('semaine')}}" name="semaine" data-required="1"
                                           class="form-control" />
                                    @if($errors->has('semaine'))
                                        <span class="text-danger">{{$errors->first('semaine')}}</span>
                                    @endif
                                </div>


                            </div>
                           
									
                            
                            

                        </div>

                        <div class="form-group">
                            <div class="offset-md-3 col-md-9">
                                <button type="submit" class="btn btn-info m-r-20">Créer</button>
                                <a href="/addrapporthebdo" class="btn btn-default">Annuler</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end page content -->
@endsection
