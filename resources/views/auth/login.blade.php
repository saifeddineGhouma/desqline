<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dashboard-template.multipurposethemes.com/main-ltr/auth_login2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Dec 2019 21:50:04 GMT -->
<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://dashboard-template.multipurposethemes.com/images/favicon.ico">

    <title>Instapay - Log in </title>
  
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="/assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">
	
	<!-- theme style -->
	<link rel="stylesheet" href="/css/style1.css">
	 
	<!-- Admin skins -->
	<link rel="stylesheet" href="/css/skin_color.css">	

</head>
<body class="hold-transition theme-blueindigo bg-img" style="background-image: {{asset("/images/auth-bg/bg-2.jpg")}};">
	
	<div class="h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">
			<div class="col-xl-4 col-lg-7 col-md-6 col-12">
				<div class="bg-opacity-80 depth-4 rounded">
					<div class="content-top-agile p-30 pb-0">
						<h2 class="text-left">Connexion Instapay</h2>						
					</div>
					<div class="p-30">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>								

						
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- jQuery 3 -->
	<script src="../assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js"></script>
	
	<!-- fullscreen -->
	<script src="../assets/vendor_components/screenfull/screenfull.js"></script>
	
	<!-- popper -->
	<script src="../assets/vendor_components/popper/dist/popper.min.js"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="../assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>

</body>

<!-- Mirrored from dashboard-template.multipurposethemes.com/main-ltr/auth_login2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Dec 2019 21:50:05 GMT -->
</html>
