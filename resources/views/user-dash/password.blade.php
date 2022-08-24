
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="RedstarHospital" />
    <title>Redstar Hospital | Bootstrap Responsive Hospital Admin Template</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
    <!-- icons -->
    <link href="{{asset('fonts/font-awesome/v6/css/all.css')}}" rel="stylesheet" type="text/css" />
    <!-- bootstrap -->
    <link href="{{asset('assets/bundles/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- style -->
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
    <!-- favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" />
</head>

<body>
<div class="main">
    <!-- Sing in  Form -->
    <section class="sign-in">
        <div class="container">
            <div class="signin-content">
                <div class="signin-image">
                    <div class="container-login100 page-background">
                        <div class="wrap-login100">
                            <form class="login100-form validate-form">
									<span class="login100-form-logo">
										<img src="img/dp.jpg" class="imgroundcorners" alt="John Doe">
									</span>
                                <span class="login100-form-title">
										{{\Illuminate\Support\Facades\Auth::user()->name}}
									</span>
                                <p class="text-center txt-locked">

                                </p>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="signin-form">
                    <h2 class="form-title">Changer mot de passe !!!</h2>
                    <p>Entrer votre mot de passe et le nouveau mot de passe</p><br>
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{session('success')}}. Click <a href="{{url('/')}}">ici</a> pour revenir à l'accueil
                        </div>
                    @endif
                    <form method="post" action="{{url('changepassword')}}" class="register-form" id="login-form">
                        @csrf
                        <h5 class="my-4 text-danger">
                            @if ($errors->all())
                                {{$errors->first("fail")}}
                            @endif
                        </h5>
                        <div class="form-group">
                            <div class="mb-3">

                                <input name="oldpassword" type="password" placeholder="Mot de passe actuelle"
                                       class="form-control input-height" />
                                <small id="helpId" class="text-danger">
                                    @if ($errors->all())
                                        {{$errors->first("oldpassword")}}
                                    @endif
                                </small>
                            </div>
                            <div class="">

                                <input name="newpassword" type="password" placeholder="Nouveau mot de passe"
                                       class="form-control input-height" />
                                <small id="helpId" class="text-danger">
                                    @if ($errors->all())
                                        {{$errors->first("newpassword")}}
                                    @endif
                                </small>
                            </div>
                            <div class="mt-3">
                                <input name="confirmpassword" type="password" placeholder="Confirmer mot de passe"
                                       class="form-control input-height" />
                                <small id="helpId" class="text-danger">
                                    @if ($errors->all())
                                        {{$errors->first("confirmpassword")}}
                                    @endif
                                </small>
                            </div>
                        </div>
                        <div class="form-group form-button">
                            <button type="submit" class="btn btn-round btn-primary" name="send" id="send">Valider</button>
                        </div>
                    </form>

                    <div class="text-center mt-3">

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- start js include path -->
<script src="{{asset('assets/bundles/jquery/jquery.min.js')}}"></script>
<!-- bootstrap -->
<script src="{{asset('assets/bundles/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- end js include path -->
</body>

</html>
