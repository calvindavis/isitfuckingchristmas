<!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="description" content="<?php echo $message; ?>" />
		<title>Is it fucking Christmas?</title>
		<link rel="canonical" href="<?php echo IIFC_URL; ?>" />
		<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo IIFC_URL; ?>rss" />
		<style>
			* { padding: 0; margin: 0; }
			html { background: #fff; color: #000; font: 400 13px/1.231 Arial, sans-serif; }
			a { color: #000; text-decoration: none; }
			.message { font-size: 86px; font-weight: 700; line-height: 86px; text-align: center; position: absolute; top: 50%; width: 100%; margin-top: -43px; z-index: 1; }
			.like { opacity: .333; -moz-transition: all .5s; -webkit-transition: all .5s; position: relative; height: 20px; padding: 15px; z-index: 2; }
			.like:hover { opacity: 1; }
			.like span { float: left; }
		</style>
		<!-- Google Analytics tracking code -->
		<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-12109165-10']);
			_gaq.push(['_trackPageview']);
			(function() {
				var ga = document.createElement('script');
				ga.type = 'text/javascript';
				ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(ga, s);
			})();
		</script>
	</head>
	<body>
		<h1 class="message">
			<a href="<?php echo IIFC_URL; ?>rss"><?php echo $message; ?></a>
		</h1>
		<div class="like">
			<span class="plus-one">
				<g:plusone size="medium" annotation="bubble"></g:plusone>
				<script type="text/javascript">
					window.___gcfg = {lang: 'en-GB'};
					(function() {
						var po = document.createElement('script');
						po.type = 'text/javascript';
						po.async = true;
						po.src = 'https://apis.google.com/js/plusone.js';
						var s = document.getElementsByTagName('script')[0];
						s.parentNode.insertBefore(po, s);
					})();
				</script>
			</span>
			<span class="twitter">
				<a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			</span>
			<span class="facebook">
				<div id="fb-root"></div>
				<script>
					(function(d, s, id) {
						var js, fjs = d.getElementsByTagName(s)[0];
						if (d.getElementById(id)) return;
						js = d.createElement(s); js.id = id;
						js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=";
						fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));
				</script>
				<div class="fb-like" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false" data-font="arial" data-href="http://isitfuckingchristmas.co.uk/"></div>
			</span>
		</div>
	</body>
</html>