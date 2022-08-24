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
	<link href="fonts.googleapis.com/css6079.css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<link href="assets/fonts/font-awesome/v6/css/all.css" rel="stylesheet" type="text/css" />
	<!-- bootstrap -->
	<link href="assets/bundles/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<!-- style -->
	<link rel="stylesheet" href="assets/css/login.css">
	<!-- favicon -->
	<link rel="shortcut icon" href="assets/img/favicon.ico" />
</head>

<body>
	<div class="main">
		<!-- Sing in  Form -->
		<section class="sign-in">
			<div class="container">
				<div class="signin-content">
					<div class="signin-image">
						<figure><img src="assets/img/pages/signin.jpg" alt="sing up image"></figure>
						<a href="" class="signup-image-link"></a>
					</div>
					<div class="signin-form">
						<h2 class="form-title">Connexion</h2>
						<form action="{{route('loginUser')}}" class="register-form" method="post" id="login-form">
                            @csrf
                            <h5 class="my-4 text-danger">
                                @if ($errors->all())
                                    {{$errors->first("fail")}}
                                @endif
                            </h5>
							<div class="form-group">
								<div class="">
									<input name="username" type="text" placeholder="E-mail"
										class="form-control input-height" /> </div>
                                <small id="helpId" class="text-danger">
                                    @if ($errors->all())
                                        {{$errors->first("username")}}
                                    @endif
                                </small>
							</div>
							<div class="form-group">
								<div class="">
									<input name="password" type="password" placeholder="Mot de passe"
										class="form-control input-height" />
                                </div>
                                <small id="helpId" class="text-danger">
                                    @if ($errors->all())
                                        {{$errors->first("password")}}
                                    @endif
                                </small>
							</div>
							<div class="form-group">
								<input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
								<label for="remember-me" class="label-agree-term"><span><span></span></span>Se souvenir</label>
							</div>
							<div class="form-group form-button">
								<button class="btn btn-round btn-primary" name="signin" id="signin">Connexion</button>
							</div>
						</form>
						<div class="social-login">

						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<!-- start js include path -->
	<script src="assets/bundles/jquery/jquery.min.js"></script>
	<!-- bootstrap -->
	<script src="assets/bundles/bootstrap/js/bootstrap.min.js"></script>
	<!-- end js include path -->
</body>


</html>
