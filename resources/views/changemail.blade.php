
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Change Email/Password - 1kobo</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="https://gdpd.xyz/kimages/icons/favicon.png"/>

	<link rel="stylesheet" type="text/css" href="https://gdpd.xyz/kvendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://gdpd.xyz/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://gdpd.xyz/kvendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="https://gdpd.xyz/kvendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="https://gdpd.xyz/kcss/util.css">
	<link rel="stylesheet" type="text/css" href="https://gdpd.xyz/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	
    <meta property="og:url" content="https://1kobo.xzy/" />
	<meta property="og:url" content="https://1kobo.xzy/" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Change Email/Password - 1kobo" />
	<meta property="og:description" content="1kobo helps you to confess your feelings or send a message to your friends, family, and loved ones anonymously for free." />
	<meta property="og:image" content="https://gdpd.xyz/kimages/cover.jpg" />
	<meta property="fb:app_id" content="2175291599223717"/>
	<meta name="robots" content="noindex">
	<!-- HEADER ALL -->
<meta name="theme-color" content="#b500c9">
<link rel="manifest" href="/manifest.json" />
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-60228164-7"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-60228164-7');
</script>
<!-- ADSENSE -->
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1740040881361415"
     crossorigin="anonymous"></script>
<!-- TABOOLA -->
<script type="text/javascript">
  window._taboola = window._taboola || [];
  _taboola.push({article:'auto'});
  !function (e, f, u, i) {
    if (!document.getElementById(i)){
      e.async = 1;
      e.src = u;
      e.id = i;
      f.parentNode.insertBefore(e, f);
    }
  }(document.createElement('script'),
  document.getElementsByTagName('script')[0],
  '//cdn.taboola.com/libtrc/1kobo/loader.js',
  'tb_loader_script');
  if(window.performance && typeof window.performance.mark == 'function')
    {window.performance.mark('tbl_ic');}
</script>
<!-- OPTAD360 -->
<script async src="//cmp.optad360.io/items/defff582-45f1-46ce-a933-3e013f095982.min.js"></script>
<script async src="//get.optad360.io/sf/ebd3f986-c53c-4ed5-8884-a20db4e56123/plugin.min.js"></script>
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
					Change Email
					<br>
					<p class="m-t-15">You can update your email from here. <b>Add your email</b> so that you can reset your password easily.</p>
				</span>
				<p class="m-b-20" align="center"><b class="suc"></b><b class="req"></b></p>
                @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p style=color:green>{{ $message }}</p>
                        </div>
                    @endif
				<form class="contact100-form validate-form" method="post" action="{{ url('/') }}/changemail/update">
                @csrf
                @method('PUT')
					<div class="wrap-input100 validate-input" data-validate="Email is required">
						<span class="label-input100">Your E-Mail</span>
						<input class="input100" type="email" name="email" placeholder="Enter your email here" value="{{Auth::user()->email}}" maxlength="50">
						<span class="focus-input100"></span>
					</div>
					<div class="container-contact100-form-btn">
						<div class="wrap-contact100-form-btn">
							<div class="contact100-form-bgbtn"></div>
							<button class="contact100-form-btn" name='btn-email'>
								<span>
									Update Email
									<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
								</span>
							</button>
						</div>
					</div>
				</form>
								<hr>
				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<a href="/settings">
						<button class="contact100-form-btn">
						Go Back
						<i class="fa fa-long-arrow-left m-l-7" aria-hidden="true"></i>
						</span>
						</button></a>
					</div>
				</div>
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
<p align="center"><a href="/">Home</a> | <a href="/legal">Disclaimer</a> | <a href="/contact">Contact</a></p>
<center><a href='https://play.google.com/store/apps/details?id=com.1kobo.app&utm_source=website&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1' target="_blank"><img src="https://gdpd.xyz/kimages/google_play.png" width="35%" alt="Get the app from Google Play"></a></center></footer>
</html>
