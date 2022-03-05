<!DOCTYPE html>
<html lang="en">
<head>
	<title>My Messages - 1kobo</title>
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
	<meta property="og:title" content="My Messages - 1kobo" />
	<meta property="og:description" content="GDPD.XYZ" />
	<meta property="og:image" content="https://gdpd.xyz/kimages/cover.jpg" />
	<meta property="fb:app_id" content="2175291599223717"/>
	<meta name="robots" content="noindex">
	<!-- HEADER ALL -->
<meta name="theme-color" content="#b500c9">
<link rel="manifest" href="/manifest.json" />
	<!-- temporary style placement -->
	<style>
	#loaderX{text-align: center;margin: 20px 10px 30px 10px;display: none;}
	#loadFinish{text-align: center;display: none;} #loadMore{display: none;}
	.back-to-top{display:none;position:fixed;bottom:30px;right:0px;width:74px;height:40px;z-index:1;cursor:pointer;text-decoration:none;transition:opacity .2s ease-out;background-image:url(https://gdpd.xyz/kimages/buttonBack.png)}.back-to-top:hover{opacity:.7}
	</style>

</head>
<body>
	<div class="container-contact100">
		<div class="wrap-contact100">
			<div class="contact100-form">
				<span class="contact100-form-title">
				My Answers
				<p>&#128071; Scroll &#128071; down to check out the messages that you have received</p>
					<div class="m-t-15" style="justify-content:center;" id="adslot">
</div>					<!--<img src="https://gdpd.xyz/kimages/logo-icon.png" class="p-b-45" alt="1kobo">-->
				</span>
				<p class="m-b-10 m-t-15" align="center"><b class="suc"></b><b class="req"></b></p>
				@if ($responds = Session::get('success'))
                        <div class="alert alert-success">
                            <p style=color:green>{{ $responds }}</p>
                        </div>
                    @endif
                @if ($message->count() == null)
				
                <div class='answersx noansx'>
								<p>Oops! &#128517; No one has sent you a message <b>in last 3 Days</b>! Share your profile link and check back later again!</p>
							</div>				<div id="loaderX">
						<img src="https://gdpd.xyz/kimages/loader2.gif" alt="Loading..">
				</div>
							</div>

                            @else
                            <div id="results">
                            @foreach ($message as $messages)

                            <div class="answersx ansx m-b-8">
                            <p class="m-b-10"><b>Message:</b><br>{{$messages->message}}</p>
                            <p>- Anonymous [{{$messages->created_at	}}]</p>
                            <a href="/share/{{$messages->id}}"><button class="respiconx buttxxx nbutx m-t-10 id=" goback'="" onclick="GoBackBtn()" '=""><!--<i class='fa fa-share m-r-10' title='Share Response'></i>-->✨ Share Response ✨</button></a>
                            <a href="/report/{{$messages->id}}"><button class="respiconx buttxxx nbutx m-t-3" id="goback" onclick="GoBackBtn()"><i class="fa fa-flag m-r-25" title="Report Response"></i> Report/Spam</button></a>
                            <a href="/archive/{{$messages->id}}"><button class="respiconx buttxxx nbutx m-t-3" id="goback" onclick="GoBackBtn()"><i class="fa fa-archive m-r-25" title="Archive Response"></i> Archive</button></a>
                            </div>
                            @endforeach

                            </div>

    </div>
@endif
                <br>
            {{$message->links()}}

                
			<hr>
			
					<div class="container-contact100-form-btn" id="loadFinishBt1" style="display: none;">
						<div class="wrap-contact100-form-btn">
							<div class="contact100-form-bgbtn"></div>
							<a href="/archivedMessages">
							<button class="contact100-form-btn" id="goback" onclick="GoBackBtn()">
								<span>
									View More Answers
									<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
								</span>
							</button>
							</a>
						</div>
					</div>
									
				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<a href="dashboard">
						<button class="contact100-form-btn" id="goback" onclick="GoBackBtn()">
						Go Back
						<i class="fa fa-long-arrow-left m-l-7" aria-hidden="true"></i>
						</span>
						</button></a>
					</div>
				</div>
				<a href="/dashboard" class="back-to-top" id='goback' onclick='GoBackBtn()'></a>

				<div class="m-t-10">
					<div style="justify-content:center;" id="adslot">
  <!-- 1kobo_MessagePages_Body_Internal_TF 
  <div id="taboola-1kobo-tfeed"></div> -->
  <!-- AdSlot6 Load -->
  <script type='text/javascript'>
					window._taboola = window._taboola || [];
					_taboola.push({
					mode: 'alternating-thumbnails-a',
					container: 'taboola-1kobo-tfeed',
					placement: 'InternalMessagesTFeed',
					target_type: 'mix'
					});
				</script>
</div>
				</div>
				
				<div class="m-t-20">
					<button class='respiconx buttxxx nbutx dropbtn m-t-1' onClick='DDFunctionX()'>1kobo Messages <i class='fa fa-caret-down m-r-25' title='1kobo Messages'></i></button></a>
					<div class="dropDownContentShow" id="myDropdownX">
						<p><br>
						1kobo is an interactive Dare Game, where you can compliment and get complimented by your friends, family and closed ones keeping the privacy of the users safe.<br>
						One can only send you a private anonymous message in 1kobo when he or she has your username. We recommend you share your unique profile link with everyone you
						love and care about. Not only them but you can also share the dare with everyone in your social media contact list and ask them to answer the dare. By doing this
						you will be able to know how people think about you in general. Ask your friends to join the platform and send their unique links too so that you can compliment
						them anonymously. Does not matter if you are shy to compliment someone or an introvert in general, you can always use the power of anonymity in front of everyone
						else on our platform and use it to send and receive anonymous compliments, and texts.<br>
						Suggestions and Compliments received by your friends and acquaintances are to be taken on a positive note.<br><br>
						Messages that you receive can be shared as a Status/Story using the "Share" button under the message, once you reach the share page you can follow the instructions
						and share the secret message that you received. You can archive a message by tapping on "Archive Message" under "More Options" below the message that you want to
						archive. In case, you think that you may have received an inappropriate message you can always choose to "report" the message. The reported secret message will be
						sent to the designated support team for review. If the message is found to be violating our terms and conditions, the message sender will be blocked from further
						accessing the system.
						</p>
					</div>
				</div>
		</div>
	</div>
	<script src="https://gdpd.xyz/kvendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="https://gdpd.xyz/kvendor/animsition/js/animsition.min.js"></script>
	<script src="https://gdpd.xyz/kvendor/bootstrap/js/popper.js"></script>
	<script src="https://gdpd.xyz/kvendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="https://gdpd.xyz/js/main.js"></script>
	<script src="https://gdpd.xyz/js/ddfxx.js"></script>
	<script type="text/javascript">
		var idleTime=0,page=0,delay=3e3,reachedMax=!1,callLock=!1,showAfter=850,loadAfter=100;function getData(){callLock||reachedMax||(callLock=!0,$.ajax({url:"myMessages.php",method:"POST",dataType:"text",data:{getData:1,page:page},beforeSend:function(){$("#loaderX").show(),$("#loadMore").hide()},success:function(o){setTimeout(function(){$("#loaderX").hide(),$("#loadMore").show(),o.redirect&&(window.location.replace=o.redirect),"reachedMax"==o?(reachedMax=!0,$("#loadMore").hide(),$("#loadFinish").show(),$("#loadFinishBt1").show()):(page+=1,$("#results").append(o),callLock=!1,loadAfter+=300,delay=1500)},delay)}}))}function reachedPage(){$(window).scroll(function(){$(this).scrollTop()>showAfter?$(".back-to-top").fadeIn():$(".back-to-top").fadeOut()})}function idleLogout(){var o;function e(){window.location.reload()}function a(){clearTimeout(o),o=setTimeout(e,12e4)}window.onload=a,window.onmousemove=a,window.onmousedown=a,window.ontouchstart=a,window.onclick=a,window.onkeydown=a,window.addEventListener("scroll",a,!0)}$(window).scroll(function(){$(document).height();$(this).scrollTop()>loadAfter&&(getData(),reachedPage())}),$(document).ready(function(){idleLogout(),getData()}),$(window).on("beforeunload",function(){$(window).scrollTop(0)});
		function GoBackBtn(){$("#adslot").hide();$("#goback").text('Redirecting...');}
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
<center><a href='https://play.google.com/store/apps/details?id=com.1kobo.app&utm_source=website&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1' target="_blank"><img src="https://gdpd.xyz/kimages/google_play.png" width="35%" alt="Get the app from Google Play"></a></center>
</footer>
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
