<!DOCTYPE HTML>

<html>
	<head>
		<title>Soul Street</title>
		<meta charset='UTF-8' />
		<meta name='viewport' content='width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no' />
		<meta name='format-detection' content='telephone=no' />				
		<link rel="stylesheet" type="text/css" href="./css/login.css" />
		<link rel="stylesheet" type="text/css" href="./css/footer.css" />
		<link rel="stylesheet" type="text/css" href="./css/common.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://dinbror.dk/bpopup/assets/jquery.bpopup-0.9.4.min.js"></script>
		<script src="http://dinbror.dk/bpopup/assets/jquery.easing.1.3.js"></script>
		<script type="text/javascript">
			;(function($) {
        		$(function() {
            		$('#user_name').bind('click', function(e) {
                		e.preventDefault();
                		$('#create_wrapper').bPopup({

                		});
            		});
        		});
    		})(jQuery);

		</script>
		

		<!--facebook-->
		<script>
		  window.fbAsyncInit = function() {
		    FB.init({
		      appId      : '389185827938088',
		      xfbml      : true,
		      version    : 'v2.4'
		    });
		  };

		  (function(d, s, id){
		     var js, fjs = d.getElementsByTagName(s)[0];
		     if (d.getElementById(id)) {return;}
		     js = d.createElement(s); js.id = id;
		     js.src = "//connect.facebook.net/en_US/sdk.js";
		     fjs.parentNode.insertBefore(js, fjs);
		   }(document, 'script', 'facebook-jssdk'));
		</script>
				<script>

			function statusChangeCallback(response) {
		    console.log('statusChangeCallback');
		    console.log(response);
		    // The response object is returned with a status field that lets the
		    // app know the current login status of the person.
		    // Full docs on the response object can be found in the documentation
		    // for FB.getLoginStatus().
		    if (response.status === 'connected') {
		      // Logged into your app and Facebook.
		      testAPI();
		    } else if (response.status === 'not_authorized') {
		      // The person is logged into Facebook, but not your app.
		      document.getElementById('status').innerHTML = 'Please log ' +
		        'into this app.';
		    } else {
		      // The person is not logged into Facebook, so we're not sure if
		      // they are logged into this app or not.
		      document.getElementById('status').innerHTML = 'Please log ' +
		        'into Facebook.';
		    }
		  }

		  // This function is called when someone finishes with the Login
		  // Button.  See the onlogin handler attached to it in the sample
		  // code below.
		  function checkLoginState() {
		    FB.getLoginStatus(function(response) {
		      statusChangeCallback(response);
		    });
		  }

		  window.fbAsyncInit = function() {
		  FB.init({
			appId      : '389185827938088',
		    cookie     : true,  // enable cookies to allow the server to access                         // the session
		    xfbml      : true,  // parse social plugins on this page
		    version    : 'v2.4' // use version 2.2
		  });

		  // Now that we've initialized the JavaScript SDK, we call 
		  // FB.getLoginStatus().  This function gets the state of the
		  // person visiting this page and can return one of three states to
		  // the callback you provide.  They can be:
		  //
		  // 1. Logged into your app ('connected')
		  // 2. Logged into Facebook, but not your app ('not_authorized')
		  // 3. Not logged into Facebook and can't tell if they are logged into
		  //    your app or not.
		  //
		  // These three cases are handled in the callback function.

		  FB.getLoginStatus(function(response) {
		    statusChangeCallback(response);
		  });

  		};

		  // Load the SDK asynchronously
		  (function(d, s, id) {
		    var js, fjs = d.getElementsByTagName(s)[0];
		    if (d.getElementById(id)) return;
		    js = d.createElement(s); js.id = id;
		    js.src = "//connect.facebook.net/en_US/sdk.js";
		    fjs.parentNode.insertBefore(js, fjs);
		  }(document, 'script', 'facebook-jssdk'));

		  // Here we run a very simple test of the Graph API after login is
		  // successful.  See statusChangeCallback() for when this call is made.
		  function testAPI() {
		    console.log('Welcome!  Fetching your information.... ');
		    FB.api('/me', function(response) {
		      console.log('Successful login for: ' + response.name);
		      document.getElementById('status').innerHTML =
		        'Thanks for logging in, ' + response.name + '!';
		    });
  }
</script>
	</head>

	<body>
		<div class='container'>
			<div class='navbar'>
					<a href="index.php"><div id="logo"></div></a>
					<div class="favorite">
						<div class="favorite_text">즐겨 찾기</div>
						<div class="favorite_icon"></div>
					</div>
					<div class="city">
						<div class="city_text">지역별</div>
						<ul>
							<li>서울</li>
							<li>부산</li>
							<li>제주</li>
							<li>대전</li>
							<li>광주</li>
							<li>기타</li>

						</ul>
					</div>
					<div class="city">
						<div class="city_text">유형별</div>
						<ul>
							<li>Band</li>
							<li>Singer</li>
							<li>Instrument</li>
						</ul>
					</div>
			</div>
		
		