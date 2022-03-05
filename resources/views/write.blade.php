<!DOCTYPE html>
<html lang="en">
<head>
	<title>Send {{$name}} a friendly message - 1kobo</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="noindex">
	<link rel="icon" type="image/png" href="https://gdpd.xyz/kimages/icons/favicon.png"/>
	<link rel="stylesheet" type="text/css" href="https://gdpd.xyz/kvendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://gdpd.xyz/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://gdpd.xyz/kvendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="https://gdpd.xyz/kvendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="https://gdpd.xyz/kcss/util.css">
	<link rel="stylesheet" type="text/css" href="https://gdpd.xyz/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta property="og:url" content="https://gdpd.xyz/{{$name}}" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Send {{$name}} a friendly message - 1kobo" />
	<meta property="og:description" content="1kobo helps you to confess your feelings or send a message to your friends, family, and loved ones anonymously for free." />
	<meta property="og:image" content="https://gdpd.xyz/kimages/cover-fb.jpg" />
	<meta property="fb:app_id" content="2175291599223717"/>
	<!-- HEADER ALL -->
<meta name="theme-color" content="#b500c9">
<link rel="manifest" href="/manifest.json" />
</head>
<body>
	<div class="container-contact100">
		<div class="wrap-contact100">
					<div class="contact100-form">
				<span class="contact100-form-title">
					Say Something..
					<p class="m-b-9"></p>
					<div style="justify-content:center;" id="adslotxx">
</div>				</span>
				<p class="m-b-10" align="center"><b class="suc"></b><b class="req"></b></p>
                @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p style=color:black>{{ $message }}</p>
                        </div>
                    @endif
				<form class="contact100-form validate-form" method="POST" action="{{ url('/') }}/{{$name}}/store">
                @csrf
					<div class="wrap-input100 validate-input" data-validate="Message is required">
						<span class="label-input100">Say Something About Me <b class="req">*</b></span>
						<textarea class="input100" name="message" placeholder="Leave A message for {{$name}} here.." maxlength="254" minlength="10" id="answer" onKeyPress="return taLimit(this)" onKeyUp="return taCount(this,'myCounter')" required></textarea>
						<p class="label-input100"><b><span id=myCounter style="font-color:white;">254</span></b> characters remaining<p>
						<span class="focus-input100"></span>
					</div>
					<input hidden type="text" name="name" value="{{$name}}">
					<div class="container-contact100-form-btn">
						<div class="wrap-contact100-form-btn">
							<div class="contact100-form-bgbtn"></div>
							<button class="contact100-form-btn" name="btn-msg">
								<span>
									Send Message
									<i class="fa fa-paper-plane m-l-7" aria-hidden="true"></i>
								</span>
							</button>
						</div>
					</div>
					<p class="consent m-b-20 m-t-10">By using this service, you agree to our Privacy Policy, Terms of Service and any related policies.</p>
					</form>
				<style>
.custom_resp {overflow: visible;justify-content: center;}
</style>
<div class="m-t-15 custom_resp">
</div>
				<p class="m-t-15 m-b-15">
					Say what do you think about {{$name}} or Leave a feedback for {{$name}} <b>anonymously</b> using the form <b>above</b>.. &#x1F970; <br>Thank You!! &#x1F60D;&#x1F60A;
				</p>

					<div style="justify-content:center;" id="adslotxx">
<!-- 1kobo_UserPage_Body2_StatS7 -->
<ins class="staticpubads89354"
  data-sizes-desktop="400x300, 360x300, 336x280, 300x250"
  data-sizes-mobile="360x300, 336x280, 300x250"
  data-slot="7">
  </ins>
</div>
				
				<p class="m-t-15">
					<b>Guide to write perfect Anonymous Messages by 1kobo: </b>
					 With the help of our anonymous message sender named 1kobo now, you can easily message your heart's desire to your friends, family members, and anyone you know who are on 1kobo. We care about our users and thus we are suggesting what you may choose to tell them anonymously. Everyone in this world loves to get affection from their loved ones be it their parents, partners, or close friends. Tell them how much they matter to you and how much you care for them! These compliments will increase their positive feelings and they will feel your friendly love from the core of their heart. If you feel like there is something you do not like out of them, you may choose to constructively criticize them about it. That is completely fine and in fact when constructive criticism is delivered right, one can develop themselves accordingly to become a better person as a whole. Make sure to be on point with the criticism and make sure that it does not become an insult at the end. You may also choose to suggest things that will help them become a better person as a whole! Future predictions are tough, as shown by the available future predictions apps just like the love predictions! No one knows what is going to happen next. But, it is always good to be aware of your cons, focuses on your pros, and transforming your cons to your pros. That is exactly what good constructive criticism helps you achieve! We hope you liked this little guide on how you can write better anonymous messages which are going to be very productive. Don't forget to play by the rules, keep it clean out there. &#x1F609;
				</p>
			</div>
					</div>
	</div>

	<script src="https://gdpd.xyz/kvendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="https://gdpd.xyz/kvendor/animsition/js/animsition.min.js"></script>
	<script src="https://gdpd.xyz/kvendor/bootstrap/js/popper.js"></script>
	<script src="https://gdpd.xyz/kvendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="https://gdpd.xyz/js/main.js"></script>
	<script>
	$(document).ready(function(){
		$("div#adslotxx").click(function(){
			$("div#adslotxx").hide(1000);
		});
	});
	</script>
	<script language = "Javascript">
	maxL=254;
	var bName = navigator.appName;
	function taLimit(taObj) {
		if (taObj.value.length==maxL) return false;
		return true;
	}	function taCount(taObj,Cnt) {
		objCnt=createObject(Cnt);
		objVal=taObj.value;
		if (objVal.length>maxL) objVal=objVal.substring(0,maxL);
		if (objCnt) {
			if(bName == "Netscape"){
				objCnt.textContent=maxL-objVal.length;}
			else{objCnt.innerText=maxL-objVal.length;}
		}
		return true;
	}	function createObject(objId) {
		if (document.getElementById) return document.getElementById(objId);
		else if (document.layers) return eval("document." + objId);
		else if (document.all) return eval("document.all." + objId);
		else return eval("document." + objId);
	}
	</script>
	<!-- FOOTER ALL -->
<script type="text/javascript">
  window._taboola = window._taboola || [];
  _taboola.push({flush: true});
</script>
</body>
<footer class="p-3 bg-dark text-white">
<p align="center">&copy; 2019 - <b><a href="#about" data-toggle="modal" data-target="#about">1kobo</a></b></p>
<p align="center"><a href="/">Home</a> | <a href="/legal">Disclaimer</a> | <a href="/contact">Contact</a></p>
<center><a href='https://play.google.com/store/apps/details?id=com.1kobo.app&utm_source=website&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1' target="_blank"><img src="https://gdpd.xyz/kimages/google_play.png" width="35%" alt="Get the app from Google Play"></a></center></footer>
</html>
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
