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
                                 Editer les données
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
                    <form action="{{route('editdatahebdo')}}" method="post" id="form_sample_1" class="form-horizontal">
                        @csrf
                        <input type="hidden" name="id" value="{{$data->id}}">
                        <div class="form-group row">
                            <label class="control-label col-md-4">Date : 
                                <span class="required">  </span>
                            </label>

                            <div class="col-md-4">
                                <input type="date" value="{{$data->date_visite}}" class="form-control" name="date_visite"
                                placeholder="" />
                         @if($errors->has('date_visite'))
                             <span class="text-danger">{{$errors->first('date_visite')}}</span>
                         @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-4">Code patient: 
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-4">
                                <input name="code_patient" value="{{$data->code_patient}}" type="text" class="form-control" />
                                @if($errors->has('code_patient'))
                                    <span class="text-danger">{{$errors->first('code_patient')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-4">Type de visite : 
                                <span class="required">  </span>
                            </label>
                             <input type="hidden" value="{{$data->user_id}}" name="email">
                            <div class="col-md-4">
                                <select  value="{{old('type_visite')}}" class="form-control" name="type_visite">
                                    <option value="">Selectionnez...</option>
                                    <option value="Structure">Structure</option>
                                    <option value="Téléphonique">Téléphonique </option>
                                    <option value="Bureau">Bureau</option>
                                    <option value="Domicile">Domicile</option>
                                </select>

                                @if($errors->has('type_visite'))
                                    <span class="text-danger">{{$errors->first('type_visite')}}</span>
                                @endif
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label class="control-label col-md-4">Wilaya: 
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-4">
                                <input name="wilaya" value="{{$data->wilaya}}" type="text" class="form-control" />
                                @if($errors->has('wilaya'))
                                    <span class="text-danger">{{$errors->first('wilaya')}}</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="control-label col-md-4">Structure: 
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-4">
                                <input name="structure" value="{{$data->structure}}" type="text" class="form-control" />
                                @if($errors->has('structure'))
                                    <span class="text-danger">{{$errors->first('structure')}}</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="control-label col-md-4">Statut: 
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-4">
                                <input name="statut" value="{{$data->statut}}" type="text" class="form-control" />
                                @if($errors->has('statut'))
                                    <span class="text-danger">{{$errors->first('statut')}}</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="control-label col-md-4">Equipement: 
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-4">
                                <input name="equipement" value="{{$data->equipement}}" type="text" class="form-control" />
                                @if($errors->has('equipement'))
                                    <span class="text-danger">{{$errors->first('equipement')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-4">Effet indésirable: 
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-4">
                                <input name="effet" value="{{$data->effet}}" type="text" class="form-control" />
                                @if($errors->has('effet'))
                                    <span class="text-danger">{{$errors->first('effet')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-4">Notification: 
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-4">
                                <input name="notification" value="{{$data->notification}}" placeholder="Oui / Non" type="text" class="form-control" />
                                @if($errors->has('notification'))
                                    <span class="text-danger">{{$errors->first('notification')}}</span>
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
