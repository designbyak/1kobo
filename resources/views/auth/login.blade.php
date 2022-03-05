
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login - 1kobo</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="https://gdpd.xyz/kimages/icons/favicon.png"/>

	<link rel="stylesheet" type="text/css" href="https://gdpd.xyz/kvendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://gdpd.xyz/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://gdpd.xyz/kvendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="https://gdpd.xyz/kvendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="https://gdpd.xyz/kcss/util.css">
	<link rel="stylesheet" type="text/css" href="https://gdpd.xyz/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	<meta property="og:url" content="https://1kobo.xzy/" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Login - 1kobo" />
	<meta property="og:description" content="1kobo helps you to confess your feelings or send a message to your friends, family, and loved ones anonymously for free." />
	<meta property="og:image" content="https://gdpd.xyz/kimages/cover.jpg" />
	<meta property="fb:app_id" content="2175291599223717"/>
	<meta name="theme-color" content="#b500c9">
	<link rel="manifest" href="/manifest.json" />
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-60228164-7"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	  gtag('config', 'UA-60228164-7');
	</script>
	<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
	<script>
	  var OneSignal = window.OneSignal || [];
	  OneSignal.push(function() {
		OneSignal.init({
		  appId: "e8d8f9cb-52ac-4146-aca3-b5c560463ca6",
		});
	  });
	</script>
</head>
<body>
	<div class="container-contact100">
		<div class="wrap-contact100">
			<div class="contact100-form">
				<span class="contact100-form-title">
					<img src="https://gdpd.xyz/kimages/logo-icon.png" class="p-b-45" alt="1kobo">
					<br>
					Login
					<br>
					<p class="m-t-15">Recieve anonymous compliments from your friends and send anonymous messages to your friends for free.</p>
				</span>
				<p class="m-b-20" align="center"><b class="suc"></b><b class="req"></b></p>

					<!-- Validation Errors -->
					<x-auth-validation-errors class="mb-4" :errors="$errors" style="color:white;" />
                <form class="contact100-form validate-form" method="POST" action="{{ route('login') }}">
                @csrf
					<div class="wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input100">Your Username</span>
						<input class="input100" id="name" class="block mt-1 w-full" type="name" name="name" :value="old('name')" placeholder="Enter your username" minlength="3" maxlength="15" autocomplete="off" required>
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input">
						<span class="label-input100">Password</span>
						<input class="input100" id="password"
                                type="password"
                                name="password"
                                required autocomplete="current-password" placeholder="Enter your password" minlength="3" maxlength="16" autocomplete="off" required>
						<span class="focus-input100"></span>
					</div>
					<div class="container-contact100-form-btn">
						<div class="wrap-contact100-form-btn">
							<div class="contact100-form-bgbtn"></div>
							<button class="contact100-form-btn" name='btn-login'>
								<span>
									Login
									<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
								</span>
							</button>
						</div>
					</div>
					<p class="p-t-10" align="center"><a href="{{ route('password.request') }}">Forgot Password</a></p>
					<p class="p-t-6" align="center"><a href="register">Don't Have an Account? Register</a></p>
				</form>

 
                </div>
		</div>
	</div>

	<script src="https://gdpd.xyz/kvendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="https://gdpd.xyz/kvendor/animsition/js/animsition.min.js"></script>
	<script src="https://gdpd.xyz/kvendor/bootstrap/js/popper.js"></script>
	<script src="https://gdpd.xyz/kvendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="https://gdpd.xyz/js/main.js"></script>
</body>
<footer class="p-3 bg-dark text-white">
<p align="center">&copy; 2019 - <b>1kobo</b></p>
<p align="center"><a href="./index.php">Home</a> | <a href="./legal.php">Disclaimer</a> | <a href="./contact.php">Contact</a></p>
<center><a href='https://play.google.com/store/apps/details?id=com.1kobo.app&utm_source=website&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1' target="_blank"><img src="https://gdpd.xyz/kimages/google_play.png" width="35%" alt="Get the app from Google Play"></a></center></footer>
</html>
                