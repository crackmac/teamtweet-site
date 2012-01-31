<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>TeamTweet - custom Twitter feeds for baseball, basketball, footbal and hockey.</title>
  <meta name="description" content="Custom Twitter feeds for all your favorite MLB, NBA, NFL or NHL Teams.">
  <meta name="author" content="Kevin Duane">
  <meta name="keywords" content="twitter, sports, baseball, mlb, basketball, nba, football, nfl, hockey, nhl">

  <!-- Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Place favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">

  <!-- CSS: 960 Grid system -->
  <link rel="stylesheet" href="css/960_12_col.css">

  <!-- CSS: implied media="all" -->
  <link rel="stylesheet" href="css/style.css?v=2">

  <!-- CSS: teamtweet style -->
  <link rel="stylesheet" href="css/teamtweet.css">

  <!-- Uncomment if you are specifically targeting less enabled mobile browsers
  <link rel="stylesheet" media="handheld" href="css/handheld.css?v=2">  -->

  <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
  <script src="js/libs/modernizr-1.7.min.js"></script>

</head>

<body>
<div class="container_12">
	<header class="grid_8">
	    <h1>TeamTweet.net</h1>
	</header>
	<div class="grid_4">
	</div>
    <nav class="grid_12">
      <?php include "navigation.html" ?>
    </nav>
	<section id="intro" class="grid_12">
		<header>
			<h2>Twitter chatter about your team from the super fans, players, bloggers and beat writers.</h2>
		</header>
		<p>You don't need a twitter account. You don't need to spend hours finding the best, insightful, opinionated and funny 
			tweeters on the web. We've done the work now you can sit back and enjoy. You'll never watch sports the same way 
			again.</p>
	</section>
	<header class="grid_12">
		<h3>Here are a few of our favorites lists</h3>
	</header>
			<div class="grid_3 tw-window01">
				<script src="http://widgets.twimg.com/j/2/widget.js"></script>
				<script>
				new TWTR.Widget({
				  version: 2,
				  type: 'search',
				  search: '#mlb',
				  interval: 6000,
				  title: '',
				  subject: 'Raw Baseball -MLB',
				  width: 220,
				  height: 600,
				  theme: {
				    shell: {
				      background: '#00CCFF',
				      color: '#ffffff'
				    },
				    tweets: {
				      background: '#ffffff',
				      color: '#444444',
				      links: '#1985b5'
				    }
				  },
				  features: {
				    scrollbar: true,
				    loop: true,
				    live: true,
				    hashtags: true,
				    timestamp: true,
				    avatars: true,
				    toptweets: true,
				    behavior: 'default'
				  }
				}).render().start();
				</script>
			</div>
			<div class="grid_3 tw-window02">
			<script src="http://widgets.twimg.com/j/2/widget.js"></script>
			<script>
			new TWTR.Widget({
			  version: 2,
			  type: 'search',
			  search: '#nfl',
			  interval: 6000,
			  title: '',
			  subject: 'Raw Football -NFL',
			  width: 220,
			  height: 600,
			  theme: {
			    shell: {
			      background: '#00CCFF',
			      color: '#ffffff'
			    },
			    tweets: {
			      background: '#ffffff',
			      color: '#444444',
			      links: '#1985b5'
			    }
			  },
			  features: {
			    scrollbar: true,
			    loop: true,
			    live: true,
			    hashtags: true,
			    timestamp: true,
			    avatars: true,
			    toptweets: true,
			    behavior: 'default'
			  }
			}).render().start();
			</script>
			</div>
					
			<div class="grid_3 tw-window03">
			<script src="http://widgets.twimg.com/j/2/widget.js"></script>
			<script>
			new TWTR.Widget({
			  version: 2,
			  type: 'search',
			  search: '#nba',
			  interval: 6000,
			  title: '',
			  subject: 'Raw Basketball -NBA',
			  width: 220,
			  height: 600,
			  theme: {
			    shell: {
			      background: '#00CCFF',
			      color: '#ffffff'
			    },
			    tweets: {
			      background: '#ffffff',
			      color: '#444444',
			      links: '#1985b5'
			    }
			  },
			  features: {
			    scrollbar: true,
			    loop: true,
			    live: true,
			    hashtags: true,
			    timestamp: true,
			    avatars: true,
			    toptweets: true,
			    behavior: 'default'
			  }
			}).render().start();
			</script>
			</div>

		<aside class="grid_3"> <!-- Sidebar -->
			<h3>We're just getting started</h3>
			<p>It takes time to find the right bunch of tweeters for our lists so please excuse any lack of experts. There is always the Raw Feed and Trash Talk to keep you entertained. Read more <a href="#">About Us</a> and how things work.
			 
			<h3>Know any experts?</h3>
			<p>At TeamTweet.net we don't want you to miss a great tweet. If you know someone who's putting it out there and not getting seen then let us know <a href="http://twitter.com/#!/Team_Tweet" target="_blank">@team_tweet</a> and we'll add them to one of our lists. 
		</aside>
    	<footer class="grid_8">
			<!-- Footer  -->
			<p>Copyright &copy; 2011 <a href="http://kevinduane.com">kevinduane.com</a>. All rights reserved.</p>
    	</footer>
  </div> <!--! end of #container -->


  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
  <script>window.jQuery || document.write("<script src='js/libs/jquery-1.5.1.min.js'>\x3C/script>")</script>


  <!-- scripts concatenated and minified via ant build script-->
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>
  <!-- end scripts-->


  <!--[if lt IE 7 ]>
    <script src="js/libs/dd_belatedpng.js"></script>
    <script>DD_belatedPNG.fix("img, .png_bg"); // Fix any <img> or .png_bg bg-images. Also, please read goo.gl/mZiyb </script>
  <![endif]-->


  <!-- mathiasbynens.be/notes/async-analytics-snippet Change UA-XXXXX-X to be your site's ID -->
  <script>
    var _gaq=[["_setAccount","UA-147594-4"],["_trackPageview"]];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
    g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
    s.parentNode.insertBefore(g,s)}(document,"script"));
  </script>

</body>
</html>
