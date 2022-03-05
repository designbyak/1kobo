
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Archive Answer - 1kobo</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="https://gdpd.xyz/kimages/icons/favicon.png"/>

	<link rel="stylesheet" type="text/css" href="https://gdpd.xyz/kvendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://gdpd.xyz/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://gdpd.xyz/kvendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="https://gdpd.xyz/kvendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="https://gdpd.xyz/kvendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="https://gdpd.xyz/kcss/util.css">
	<link rel="stylesheet" type="text/css" href="https://gdpd.xyz/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta property="og:url" content="https://1kobo.xzy/" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Archive Answer - 1kobo" />
	<meta property="og:description" content="Rate Me Out is an interactive Dare Game by GDPD.XYZ, where you can rate and get rated by your friends, family and the closed ones." />
	<meta property="og:image" content="https://gdpd.xyz/kimages/cover.jpg" />
	<meta property="fb:app_id" content="2175291599223717"/>
	<meta name="robots" content="noindex">
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
					Archive Answer?
				</span>
                @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p style=color:black>{{ $message }}</p>
                        </div>
                    @endif
				<div class='answersx ansx m-b-8'>
				<p class='m-b-10'><b>Message: </b><br>{{$archive->message}}</p>
				</div>
				<p class="m-b-10"><b>Do you want to archive the response?</b><br>Archived answers can be found at <b>Settings > Archived Answers</b>.</p>
				<form class="container-contact100-form-btn" method="POST" action="{{ url('/archivedMessages/store') }}">
                @csrf
                <input hidden type="text" name="message" value="{{$archive->message}}">
                <input hidden type="text" name="name" value="{{Auth::user()->name}}">
                <input hidden type="text" name="id" value="{{$id}}">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" name="btn-report">
							<span>
								Archive Answer
								<i class="fa fa-archive m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</form>
			</div>
			<hr>
				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<a href="/messages">
						<button class="contact100-form-btn">
						Go Back
						<i class="fa fa-long-arrow-left m-l-7" aria-hidden="true"></i>
						</span>
						</button></a>
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
