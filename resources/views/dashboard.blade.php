
<!DOCTYPE html>
<html lang="en">
<head>
	<title>My Profile - 1kobo</title>
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
	<meta property="og:title" content="My Profile - 1kobo" />
	<meta property="og:description" content="Rate Me Out is an interactive Dare Game by GDPD.XYZ, where you can rate and get rated by your friends, family and the closed ones." />
	<meta property="og:image" content="https://gdpd.xyz/kimages/cover.jpg" />
	<meta property="fb:app_id" content="2175291599223717"/>
	<meta name="robots" content="noindex">
	<!-- HEADER ALL -->
<meta name="theme-color" content="#b500c9">
<link rel="manifest" href="/manifest.json" />
</head>
<body>
	<div class="container-contact100">
		<div class="wrap-contact100">
			<div class="contact100-form">
				<span class="contact100-form-title">
					<!--<img src="https://gdpd.xyz/kimages/logo-icon.png" class="p-b-45" alt="1kobo.xzy">-->
					<div class="m-t-15" style="justify-content:center;">

</div>
<br>
				{{Auth::user()->name}}'s Profile
					<p id="usrname" onclick="copyToClipboard('#usrname')">{{url('/');}}/{{Auth::user()->name}} <i class="fa fa-copy m-l-7" aria-hidden="true"></i></p>
				</span>
				<p style="margin-bottom:12px; margin-top:10px"><b>Share your profile link</b> &#10084;&#65039; to get responses from your friend. Go to <b>"View Messages"</b> to check out the responses. &#128076;</p>
				<div class="container-contact100-form-btn m-b-20">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<a href="messages"><button class="contact100-form-btn">
							<span>
								View Messages
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button></a>
					</div>
				</div>
				<a href="#" data-toggle="modal" data-target="#share_modal" class="btn-insta m-b-20 contact100-form-btn">
					<i class="fa fa-share-alt"></i>
					Share My Profile
				</a>
				<a href="https://api.whatsapp.com/send?text=Write%20a%20*secret%20anonymous%20message*%20for%20me..%20%F0%9F%98%89%20I%20*won%27t%20know*%20who%20wrote%20it..%20%F0%9F%98%82%E2%9D%A4%20%F0%9F%91%89%20{{url('/');}}/{{Auth::user()->name}}" target="_blank" class="btn-wa m-b-20 contact100-form-btn">
					<i class="fa fa-whatsapp"></i>
					Share on WhatsApp
				</a>

				<a href="https://www.facebook.com/sharer/?u={{url('/');}}/{{Auth::user()->name}}" target="_blank" class="btn-face m-b-20 contact100-form-btn">
					<i class="fa fa-facebook-official"></i>
					Share on Facebook
				</a>
				<a data-toggle="modal" data-target="#instabio" href="#instabio" class="btn-insta m-b-20 contact100-form-btn">
					<i class="fa fa-instagram"></i>
					Share on Instagram
				</a>

				<!--
				<a data-toggle="modal" data-target="#fbinsta" href="#fbinsta" class="btn-face m-b-20 contact100-form-btn">
					<i class="fa fa-facebook-official"></i>
					Share on Facebook
				</a>
				<a data-toggle="modal" data-target="#fbinsta" href="#fbinsta" class="btn-insta m-b-20 contact100-form-btn">
					<i class="fa fa-instagram"></i>
					Share on Instagram
				</a>
				-->
				<center><a href='https://play.google.com/store/apps/details?id=com.1kobo.app&utm_source=website&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1' target="_blank"><img src="https://gdpd.xyz/kimages/google_play.png" width="81%" alt="Get the app from Google Play"></a></center>
								<hr>
				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<a href="settings"><button class="contact100-form-btn">
							<span>
								Settings
								<i class="fa fa-cogs m-l-4" aria-hidden="true"></i>
							</span>
						</button></a>
					</div>
				</div>
				<div class="m-t-15" style="justify-content:center;" id="adslotxx">

</div>
			</div>
		</div>
	</div>
	<script src="https://gdpd.xyz/kvendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="https://gdpd.xyz/kvendor/animsition/js/animsition.min.js"></script>
	<script src="https://gdpd.xyz/kvendor/bootstrap/js/popper.js"></script>
	<script src="https://gdpd.xyz/kvendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="https://gdpd.xyz/js/main.js"></script>
	<script>
	function copyToClipboard(element) {
	  var $temp = $("<input>");
	  $("body").append($temp);
	  $temp.val($(element).text()).select();
	  document.execCommand("copy");
	  alert("Link Copied To Clipboard!");
	  $temp.remove();
	}
	function addEmail() {
		window.location = "./addEmail.php";
	}
	OneSignal.push(function() {
		let myCustomUniqueUserId = "134213636";
		OneSignal.setExternalUserId(myCustomUniqueUserId);
	  });
	</script>
	<!-- FOOTER ALL -->
<script type="text/javascript">
  window._taboola = window._taboola || [];
  _taboola.push({flush: true});
</script>
</body>
<footer class="p-3 bg-dark text-white" align="center">
<p align="center">&copy; 2019 - <b><a href="#about" data-toggle="modal" data-target="#about">1kobo</a></b></p>
<p><a href="">Home</a> | <a href="/legal">Disclaimer</a> | <a href="/contact">Contact us</a></p>
</footer>
</html>
<div id="share_modal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Share</h4>
			</div>
			<div class="modal-body">
				<div class="share-apps" style="margin-bottom:20px;">
						<a href="https://api.whatsapp.com/send?text=Write%20a%20*secret%20anonymous%20message*%20for%20me..%20%F0%9F%98%89%20I%20*won%27t%20know*%20who%20wrote%20it..%20%F0%9F%98%82%E2%9D%A4%20%F0%9F%91%89%20{{url('/');}}/{{Auth::user()->name}}" target="_blank" class="whatsapp">
							<img src="https://gdpd.xyz/kimages/icons/whatsapp.png">
							<span>Share</span>
						</a>

						<a href="https://www.facebook.com/sharer/?u={{url('/');}}/{{Auth::user()->name}}" target="_blank" class="facebook">
							<img src="https://gdpd.xyz/kimages/icons/facebook.png">
							<span>Share</span>
						</a>
						<a data-toggle="modal" data-target="#instabio" href="#instabio" class="instagram">
							<img src="https://gdpd.xyz/kimages/icons/instagram.png">
							<span>Insta Bio</span>
						</a>

						<!--
						<a data-toggle="modal" data-target="#fbinsta" href="#fbinsta" class="facebook">
							<img src="https://gdpd.xyz/kimages/icons/facebook.png">
							<span>Share</span>
						</a>
						<a data-toggle="modal" data-target="#fbinsta" href="#fbinsta" class="instagram">
							<img src="https://gdpd.xyz/kimages/icons/instagram.png">
							<span>Insta Bio</span>
						</a>
						-->
						<a data-toggle="modal" data-target="#snapchat" class="snapchat">
							<img src="https://gdpd.xyz/kimages/icons/snapchat.png">
							<span>Add Story</span>
						</a>

						<a href="fb-messenger://share?link=Write%20a%20*secret%20anonymous%20message*%20for%20me..%20%F0%9F%98%89%20I%20*won%27t%20know*%20who%20wrote%20it..%20%F0%9F%98%82%E2%9D%A4%20%F0%9F%91%89%20{{url('/');}}/{{Auth::user()->name}}" class="fb-msg">
							<img src="https://gdpd.xyz/kimages/icons/messenger.png">
							<span>Share</span>
						</a>

						<!--
						<a data-toggle="modal" data-target="#fbinsta" href="#fbinsta" class="fb-msg">
							<img src="https://gdpd.xyz/kimages/icons/messenger.png">
							<span>Share</span>
						</a>
						-->
						<a href="https://twitter.com/intent/tweet?text=Write%20a%20secret%20anonymous%20message%20for%20me..%20😉%20I%20won%27t%20know%20who%20wrote%20it..%20😂❤%20👉&url={{url('/');}}/{{Auth::user()->name}}" target="_blank" class="twitter">
							<img src="https://gdpd.xyz/kimages/icons/twitter.png">
							<span>Share</span>
						</a>
						<a data-toggle="modal" data-target="#wastatus" href="#wastatus" class="whatsapp-status">
							<img src="https://gdpd.xyz/kimages/icons/whatsapp.png">
							<span>Set Status</span>
						</a>
						<a href="line://msg/text/?Write%20a%20*secret%20anonymous%20message*%20for%20me..%20%F0%9F%98%89%20I%20*won%27t%20know*%20who%20wrote%20it..%20%F0%9F%98%82%E2%9D%A4%20%F0%9F%91%89%20{{url('/');}}/{{Auth::user()->name}}" class="line">
							<img src="https://gdpd.xyz/kimages/icons/line.png">
							<span>Share</span>
						</a>
				</div>
			</div>
			<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<div id="instabio" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Instagram Bio</h4>
			</div>
			<div class="modal-body" align="center">
				<p class="p-b-5"><b>Step 1:</b> Copy your <b>Profile Link</b> from the <b>home page</b></p>
				<img class="p-b-8" src="https://gdpd.xyz/kimages/instabio-step0.jpg" width="80%" alt="Copy your Profile Link from the home page">
				<p class="p-b-5"><b>Step 2:</b> Go to your instagram profile and click on <b>edit your profile</b></p>
				<img class="p-b-8" src="https://gdpd.xyz/kimages/instabio-step1.jpg" width="80%" alt="Go to your instagram profile and click on edit your profile">
				<p class="p-b-5"><b>Step 3:</b> Paste your Profile Link in <b>Website section</b></p>
				<img class="p-b-8" src="https://gdpd.xyz/kimages/instabio-step2.jpg" width="80%" alt="Paste your Profile Link in Website section">
				<p><b>That's it! You're done!</b></p>
			</div>
			<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<div id="snapchat" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Snapchat Story</h4>
			</div>
			<div class="modal-body" align="center">
				<p class="p-b-5"><b>Step 1:</b> Copy your <b>Profile Link</b> from the <b>home page</b></p>
				<img class="p-b-8" src="https://gdpd.xyz/kimages/instabio-step0.jpg" width="80%" alt="Copy your Profile Link from the home page">
				<p class="p-b-5"><b>Step 2:</b> <b>Add a Snap</b> and mention to <b>Swipe up</b></p>
				<img class="p-b-8" src="https://gdpd.xyz/kimages/snapchat-step1.jpeg" width="80%" alt="Add a Snap and mention to Swipe up">
				<p class="p-b-5"><b>Step 3:</b> Tap the <b>Paper Clip</b></p>
				<img class="p-b-8" src="https://gdpd.xyz/kimages/snapchat-step2.jpg" width="80%" alt="Tap the Paper Clip">
				<p class="p-b-5"><b>Step 4:</b> Paste your <b>Profile Link</b></p>
				<img class="p-b-8" src="https://gdpd.xyz/kimages/snapchat-step3.jpeg" width="80%" alt="Paste your Profile Link">
				<p class="p-b-5"><b>Step 5:</b> Add to <b>Your Story</b></p>
				<img class="p-b-8" src="https://gdpd.xyz/kimages/snapchat-step4.jpg" width="80%" alt="Add to Your Story">
				<p><b>That's it!</b></p>
			</div>
			<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<div id="wastatus" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">WhatsApp Status</h4>
			</div>
			<div class="modal-body" align="center">
				<p class="p-b-5"><b>Step 1:</b> Copy your <b>Profile Link</b> from the <b>home page</b></p>
				<img class="p-b-8" src="https://gdpd.xyz/kimages/instabio-step0.jpg" width="80%" alt="Copy your Profile Link from the home page">
				<p class="p-b-5"><b>Step 2:</b> Go To <b>Status</b> Tab and Add a <b>New Status</b></p>
				<img class="p-b-8" src="https://gdpd.xyz/kimages/wastatus-step1.jpg" width="80%" alt="Go To Status Tab and Add a New Status">
				<p class="p-b-5"><b>Step 3:</b> Paste your <b>Profile Link</b> in there</p>
				<img class="p-b-8" src="https://gdpd.xyz/kimages/wastatus-step2.jpeg" width="80%" alt="Paste your Profile Link in there">
				<p class="p-b-5"><b>Step 4:</b> Now, <b>Send</b> the status</p>
				<img class="p-b-8" src="https://gdpd.xyz/kimages/wastatus-step3.jpg" width="80%" alt="Now, Send the status">
				<p><b>That's it! You're done!</b></p>
			</div>
			<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<div id="about" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">About Us</h4>
			</div>
			<div class="modal-body">
			<p class="m-b-10"><b>1kobo</b> is an online secret message sharing app. Out of all the other anonymous message sharing apps, 1kobo stands out because of several different reasons. If you are bored with your normal video streaming apps, 1kobo is here of the rescue. Share honest constructive feedbacks with your friends and help them to become a better person. In turn, you can do the same. 1kobo's aim is to be the number one honest feedback and message sharing app in the world.</p>
			<p class="m-b-10">One can only send you a private anonymous message when he or she has your username. We recommend you to share your unique profile link with everyone who you love and care about. Not only them but you can also share the dare with everyone in your WhatsApp contact list and ask them to answer the dare. By doing this you will be able to know how people think about you in general. Ask your friends to join the platform and send their unique links too so that you can compliment them anonymously.</p>
			<p class="m-b-10">Does not really matter if you are shy to compliment someone or an introvert in general, you can always use the power of anonymity in front of everyone else in our platform and use it to send and receive anonymous compliments, and texts. If your crush is on our platform too, you may ask her out for a date anonymously. Or rather you can do that directly.. haha.</p>
			<p class="m-b-10">Now, as you have got a fair enough idea about what <b>1kobo</b> is, it is time to create your account and share this with your friends so that you can start to receive anonymous compliments and wishes from your well-wishers, lover, friends, and family members.</p>
			<p class="m-b-10">Moreover, The platform is safer than ever. We are continously working on the user experience to make the game more fun.</p>
			</div>
			<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<div id="fbinsta" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Oops..!</h4>
			</div>
			<div class="modal-body">
			<p class="m-b-10">Due to recent policy updates, we have temporarily disabled link sharing on <b>Facebook</b>, <b>Instagram</b>, and <b>Facebook Messenger</b>.<br>Please kindly use other platforms like <b>WhatsApp</b> to share your 1kobo's Profile with your friends and loved ones.<br>Thanks!</p>
			<p class="m-b-10">For more information, kindly <b>contact us</b>.</p>
			</div>
			<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
