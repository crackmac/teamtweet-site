<?php 

$team_name = $_GET['var1']; 
$team_name_array = explode(" ", $team_name);
$count=count($team_name_array);
//echo $count . "\n";
//echo $team_name_array[0] . "\n";
//echo $team_name_array[1] . "\n";
//echo $team_name_array[2] . "\n";
$team_common_name = $_GET['var2'];
//$hate="hate $team_common_name OR \"$team_name_array[1] OR $team_name_array[2]\"";
$hate="hate $team_common_name OR \"$team_name\"";
//echo $hate;
$list_name="nba-" . $team_common_name;
//echo $list_name;
//$raw="$team_common_name OR \"$team_name_array[1] OR $team_name_array[2]\"";
$raw="$team_common_name OR \"$team_name\"";

$score="$team_common_name from:nba";
?>

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

  <title>TeamTweet - custom Twitter feeds for the <?php echo $team_name ?>.</title>
  <meta name="description" content="Custom Twitter feeds for the <?php echo $team_name ?> and all your favorite MLB, NBA, NFL or NHL Teams.">
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
<!-- 
	<p id="special">Special page for our friends <br />
		at <b><a href="http://teamtweet.net/secrets_from_a_stylist.php" target="_blank">Secrets From A Stylist</a></b>
	</p>
 -->
	</div>
    <nav class="grid_12">
      <?php include "navigation.html" ?>
    </nav>    
	<header class="grid_12">
		<h3><?php echo $team_name ?></h3>
	</header>
	<div class="grid_4 tw-window01">
		<script src="http://widgets.twimg.com/j/2/widget.js"></script>
		<script>
		new TWTR.Widget({
		  version: 2,
		  type: 'list',
		  rpp: 30,
		  interval: 6000,
		  title: '',
		  subject: 'Expert Stream',
		  width: 300,
		  height: 550,
		  theme: {
		    shell: {
		      background: '#4099ff',
		      color: '#ffffff'
		    },
		    tweets: {
		      background: '#ffffff',
		      color: '#444444',
		      links: '#b740c2'
		    }
		  },
		  features: {
		    scrollbar: true,
		    loop: false,
		    live: true,
		    hashtags: true,
		    timestamp: true,
		    avatars: true,
		    behavior: 'default'
		  }
		}).render().setList('tt_nba_wc', "<?php echo $list_name ?>").start();
		</script>
	</div> 

	<div class="grid_4 tw-window02">
	<script src="http://widgets.twimg.com/j/2/widget.js"></script>
	<script>
	new TWTR.Widget({
	  version: 2,
	  type: 'search',
	  search: '<?php echo $raw ?>',
	  interval: 6000,
	  title: '',
	  subject: 'Raw Feed',
	  width: 300,
	  height: 550,
	  theme: {
	    shell: {
	      background: '#8ec1da',
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
	<div class="grid_4 tw-window03">
	<script>
	new TWTR.Widget({
	  version: 2,
	  type: 'search',
	  rpp: 2,
	  search: '<?php echo $score ?>',
	  interval: 6000,
	  title: '',
	  subject: 'Score by @NBA',
	  width: 300,
	  height: 50,
	  theme: {
	    shell: {
	      background: '#8ec1da',
	      color: '#ffffff'
	    },
	    tweets: {
	      background: '#ffffff',
	      color: '#444444',
	      links: '#1985b5'
	    }
	  },
	  features: {
	    scrollbar: false,
	    loop: false,
	    live: true,
	    hashtags: true,
	    timestamp: true,
	    avatars: false,
	    toptweets: false,
	    behavior: 'default'
	  }
	}).render().start();
	</script>
	<br />	
	</div>
	<div class="grid_4 tw-window04">
	<script src="http://widgets.twimg.com/j/2/widget.js"></script>
	<script>
	new TWTR.Widget({
	  version: 2,
	  type: 'search',
	  search: '<?php echo $hate ?>',
	  interval: 6000,
	  title: '',
	  subject: 'Trash Talk',
	  width: 300,
	  height: 400,
	  theme: {
	    shell: {
	      background: '#8ec1da',
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
	    loop: false,
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
	<footer class="grid_8">
		<?php 
		    include "footer.html"; 
		?>
	</footer>
	</div>
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

