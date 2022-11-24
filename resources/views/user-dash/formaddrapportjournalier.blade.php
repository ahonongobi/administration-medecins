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
                    <form action="{{URL('addrepportjournalierpost')}}" method="post" id="form_sample_1" class="form-horizontal">
                        @csrf
                        <div class="form-body">
                            
							<div class="contact-form">

                            <div class="form-group row">
                                <label class="control-label col-md-3">Tâche 01:
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    <input type="text" value="{{old('tache_1')}}" name="tache_1" data-required="1"
                                           class="form-control" />
                                    @if($errors->has('tache_1'))
                                        <span class="text-danger">{{$errors->first('tache_1')}}</span>
                                    @endif
                                </div>


                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Tâche 02:
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    <input type="text" value="{{old('tache_2')}}" name="tache_2" data-required="1"
                                           class="form-control" />
                                    @if($errors->has('tache_2'))
                                        <span class="text-danger">{{$errors->first('tache_2')}}</span>
                                    @endif
                                </div>


                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Tâche 03:
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    <input type="text" value="{{old('tache_3')}}" name="tache_3" data-required="1"
                                           class="form-control" />
                                    @if($errors->has('tache_3'))
                                        <span class="text-danger">{{$errors->first('tache_3')}}</span>
                                    @endif
                                </div>


                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Tâche 04:
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    <input type="text" value="{{old('tache_4')}}" name="tache_4" data-required="1"
                                           class="form-control" />
                                    @if($errors->has('tache_4'))
                                        <span class="text-danger">{{$errors->first('tache_4')}}</span>
                                    @endif
                                </div>


                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Tâche 05:
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    <input type="text" value="{{old('tache_5')}}" name="tache_5" data-required="1"
                                           class="form-control" />
                                    @if($errors->has('tache_5'))
                                        <span class="text-danger">{{$errors->first('tache_5')}}</span>
                                    @endif
                                </div>


                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Tâche 06:
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    <input type="text" value="{{old('tache_6')}}" name="tache_6" data-required="1"
                                           class="form-control" />
                                    @if($errors->has('tache_6'))
                                        <span class="text-danger">{{$errors->first('tache_6')}}</span>
                                    @endif
                                </div>


                            </div>
                           
									
                            
                            <div class="form-group row">
                                <label class="control-label col-md-3">Remarque  :<span class="required"> * </span></label>
                                <div class="col-md-4">
                                    <textarea class="form-control" name="remarque" id="" cols="30" rows="10">{{old('remarque')}}</textarea>
                                </div>
                            </div>

                        </div>

                        <div class="form-group">
                            <div class="offset-md-3 col-md-9">
                                <button type="submit" class="btn btn-info m-r-20">Valider</button>
                                <a href="/addrapportjournalier" class="btn btn-default">Annuler</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end page content -->
@endsection
