@extends('_layouts._indexuser')
@section('content')
    <div class="row">



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
                    <div id="alerte" class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> Contact ajouté avec succès.

                    </div>
                    <form action="{{url('/user/contacts')}}"  method="POST" id="form_sample_1" class="form-horizontal">
                           @csrf
                        <div class="form-body">
                            <div class="form-group row">
                                <label class="control-label col-md-3">Nom et prénom:
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    <input type="text" id="name" value="{{old('name')}}" name="name" data-required="1"
                                           class="form-control" />
                                    @if($errors->has('name'))
                                        <span class="text-danger">{{$errors->first('name')}}</span>
                                    @endif
                                </div>


                            </div>


                            <div class="form-group row">
                                <label class="control-label col-md-3">Établissement:
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    <input name="etablissement" id="etablissment" value="{{old('etablissement')}}" type="text" class="form-control" />
                                    @if($errors->has('etablissement'))
                                        <span class="text-danger">{{$errors->first('etablissement')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Statut:<span class="required"> * </span></label>
                                <div class="col-md-4">
                                    <input name="statut" id="statut" value="{{old('statut')}}" type="text" class="form-control" />
                                    @if($errors->has('statut'))
                                        <span class="text-danger">{{$errors->first('statut')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Email:<span class="required"> * </span></label>
                                <div class="col-md-4">
                                    <input name="email" id="email"  value="{{old('email')}}" type="email" class="form-control" />
                                    @if($errors->has('email'))
                                        <span class="text-danger">{{$errors->first('email')}}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="control-label col-md-3">Téléphone :<span class="required"> * </span></label>
                                <div class="col-md-4">
                                    <input name="tel" id="tel" value="{{old('tel')}}" type="text" class="form-control" />
                                    @if($errors->has('tel'))
                                        <span class="text-danger">{{$errors->first('tel')}}</span>
                                    @endif
                                </div>
                            </div>


                        </div>

                        <div class="form-group">
                            <div class="offset-md-3 col-md-9">
                                <button type="submit" id="valider" class="btn btn-info m-r-20">Valider</button>
                                <a href="/user" class="btn btn-default">Annuler</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end page content -->
    <script>
    // insert to database on submit click if every input is valid
    $(document).ready(function(){
        //hide alerte
        $('#alerte').hide();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#valider').click(function (e) {
            e.preventDefault();
            //change the button to loading state
            $('#valider').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Chargement...');

            var name = $('#name').val();
            var etablissement = $('#etablissment').val();
            var statut = $('#statut').val();
            var email = $('#email').val();
            var tel = $('#tel').val();
            if (name == '' || etablissement == '' || statut == '' || email == '' || tel == '') {
                alert('Veuillez remplir tous les champs');
                $('#valider').html('Valider');
            } else {
                $.ajax({
                    //submit the form data to controller
                    //form.submit();
                    type: 'POST',
                    url: '{{url('/user/contacts')}}',
                    data: {
                        name: name,
                        etablissement: etablissement,
                        statut: statut,
                        email: email,
                        tel: tel
                    },
                    success: function (data) {
                        //alert('Contact ajouté avec succès');
                        $('#alerte').show();
                        //make  input fields empty
                        $('#name').val('');
                        $('#etablissment').val('');
                        $('#statut').val('');
                        $('#email').val('');
                        $('#tel').val('');
                        //change the button to default state
                        $('#valider').html('Valider');
                       //window.location.href = '/user';
                    }
                });
            }
        });
    })

    </script>
@endsection
