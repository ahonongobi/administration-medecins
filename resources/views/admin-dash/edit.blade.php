@extends('_layouts._index')
@section('content')
    <div class="row">
        @if(Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> {{ Session::get('success') }}

            </div>
        @endif
        <div class="col-md-12 col-sm-12">
            <div class="card card-box">
                <div class="card-head">
                    <header>Editer les informations</header>
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
                    <form action="{{url('edit/'.$user->id)}}" method="post" id="form_sample_1" class="form-horizontal">
                        @csrf
                        <div class="form-body">
                            <div class="form-group row">
                                <label class="control-label col-md-3">Nom
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    <input type="text" value="{{$user->nom ?? ''}}" name="name" data-required="1"
                                           class="form-control" /> </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Email
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    <div class="input-group">

                                        <input type="text" value="{{$user->email ?? ''}}" class="form-control" name="email"
                                               placeholder="Email Address"> </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Prénom
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    <input name="surname" value="{{$user->prenom ?? ''}}" type="text" class="form-control" />

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Téléphone
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    <input name="phone" value="{{$user->tel ?? ''}}" type="text" class="form-control" /> </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Date de naissance
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    <input name="birthdate" value="{{$user->date_naissance ?? ''}}" type="text" class="form-control" />

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Adresse<span class="required"> * </span></label>
                                <div class="col-md-4">
                                    <input name="addresse" value="{{$user->addresse ?? ''}}" type="text" class="form-control" />

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Programmes<span class="required"> * </span></label>
                                <div class="col-md-4">
                                    <input name="programmes"  value="{{$user->programmes ?? ''}}" type="text" class="form-control" />

                                </div>
                            </div>

                            <div class="form-group row d-none">
                                <label class="control-label col-md-3">Programmes
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    <select class="form-control" name="select">
                                        <option value="">Selection...</option>
                                        <option value="Category 1">Category 1</option>
                                        <option value="Category 2">Category 2</option>
                                        <option value="Category 3">Category 5</option>
                                        <option value="Category 4">Category 4</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="offset-md-3 col-md-9">
                                <button type="submit" class="btn btn-info m-r-20">Valider</button>
                                <button type="button" class="btn btn-default">Annuler</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end page content -->
@endsection
