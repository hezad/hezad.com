<?php

	function get_soundcloud_url($song_slug) {
		return "http://w.soundcloud.com/player/?url=https://soundcloud.com/hezad/$song_slug&amp;auto_play=false&amp;buying=false&amp;liking=false&amp;download=false&amp;sharing=false&amp;show_artwork=false&amp;show_comments=false&amp;show_playcount=false&amp;show_user=true&amp;hide_related=false&amp;visual=false&amp;start_track=0&amp;callback=true&amp;theme_color=00aa57";
	}

	function soundcloud_iframe($song_slug) {
		echo '<iframe class="soundcloud-frame iframe" width="100%" height="130" scrolling="no" frameborder="no" src="'.get_soundcloud_url($slong_slug).'"></iframe>';
	}

?><!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="description" content="This is the website of Pierrick Varin">

	<meta property="og:url" content="http://hezad.com" />
	<meta property="og:description" content="This is the website of Pierrick Varin" />
	<meta property="og:title" content="hezad.com" />
	<meta property="og:site_name" content="Hezad's website" />
	<meta property="og:image" content="http://hezad.com/img/preview.jpg" />
	<meta property="fb:admins" content="100000641265022" />

	<title>Hezad's website</title>

	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
	<link href='style.css' rel='stylesheet' type='text/css'>
	<link href='mobile.css' rel='stylesheet' type='text/css'>

	<script src="soundcloud-api.js"></script>
	<script src="jquery.js"></script>
</head>
<body>
	<header>
		<div id="canvas-wrapper">
			<div id="canvas-container">
				<canvas id="canvas1" width="300" height="300"></canvas>
			</div>
		</div>
		<div id="header-infos">
			<div id="infos-container">
				<h2>Hello world</h2>

				<p>
					My name is Pierrick Varin.<br />
					I am a co-founder of <a href="http://glitchstudio.com" target="_blank">Glitch</a>, a creative agency located in <a href="https://goo.gl/maps/S3Yke" target="_blank">Paris</a>.
				</p>

				<p>
					I'm also a humble <a href="https://soundcloud.com/hezad" target="_blank">musician</a> when I'm not tinkering with electronics or coding stuff that will never leave my <span class="pre">/var/www/lab</span> folder.
				</p>

				<p>
					Sometimes, I do push stuff on <a href="https://github.com/hezad" target="_blank">github</a> though.
				</p>

				<p>
					Anyway, this is my website.
				</p>
			</div>
		</div>
	</header>

	<section class="section photos">
		<h2><span>Some photos from here and there</span></h2>

		<div class="photo">
			<div class="inner-photo">
				<a target="_blank" href="https://instagram.com/p/wRaNntl_ba">
					<img src="img/instagram-1.jpg" width="100%" height="100%">
				</a>
			</div>
		</div>

		<div class="photo">
			<div class="inner-photo">
				<a target="_blank" href="https://instagram.com/p/cMcufml_S7">
					<img src="img/instagram-2.jpg" width="100%" height="100%">
				</a>
			</div>
		</div>

		<div class="photo">
			<div class="inner-photo">
				<a target="_blank" href="https://instagram.com/p/aAFuq1F_fK">
					<img src="img/instagram-3.jpg" width="100%" height="100%">
				</a>
			</div>
		</div>

		<div class="photo">
			<div class="inner-photo">
				<a target="_blank" href="https://instagram.com/p/X93IvDl_dv">
					<img src="img/instagram-4.jpg" width="100%" height="100%">
				</a>
			</div>
		</div>

		<div class="photo">
			<div class="inner-photo">
				<a target="_blank" href="https://instagram.com/p/WpQDUWF_Wy">
					<img src="img/instagram-5.jpg" width="100%" height="100%">
				</a>
			</div>
		</div>

		<div class="photo">
			<div class="inner-photo">
				<a target="_blank" href="https://instagram.com/p/WWwXcTl_Vp">
					<img src="img/instagram-6.jpg" width="100%" height="100%">
				</a>
			</div>
		</div>

		<div class="photo">
			<div class="inner-photo">
				<a target="_blank" href="https://instagram.com/p/WHhtiKF_WW">
					<img src="img/instagram-7.jpg" width="100%" height="100%">
				</a>
			</div>
		</div>
		
		<div class="photo">
			<div class="inner-photo">
				<a target="_blank" href="https://instagram.com/p/VjX4xyF_UU">
					<img src="img/instagram-8.jpg" width="100%" height="100%">
				</a>
			</div>
		</div>

		<div class="more">
			<a href="https://instagram.com/hezad" target="_blank" class="cta-button instagram">More photos</a>
		</div>
	</section>

	<footer class="section empty-footer">
		<h2><span>An almost-empty footer</span></h2>

		<p>Just for the sake of it.</p>
	</footer>

	<script src="main.js"></script>

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-6167427-3', 'auto');
	  ga('send', 'pageview');

	</script>
</body>
</html>
