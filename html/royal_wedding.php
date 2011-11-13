<?php 

#$team_name = $_GET['var1']; 
$list_name = "royal_wedding";
$name1 = "royalwedding";
$name2 = "William & Kate";
$name3 = "middleton";
$name4 = "rw2011";

$raw="$name1 OR $name2 OR $name3 OR $name4";
$love = "love $raw";
$hate = "hate $raw";
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

  <title>The Royal Wedding TeamTweet Feed - William & Kates special day</title>
  <meta name="description" content="Watch twitter commentary from the Royal Wedding by people on the ground in London and in the know on the web through teamtweet.net's special page.">
  <meta name="author" content="Kevin Duane">
  <meta name="keywords" content="Royal Wedding, William & Kate, Monarchy, royalwedding, queen">

  <!-- Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Place favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">


  <!-- CSS: implied media="all" -->
  <link rel="stylesheet" href="css/style.css?v=2">

  <!-- Uncomment if you are specifically targeting less enabled mobile browsers
  <link rel="stylesheet" media="handheld" href="css/handheld.css?v=2">  -->

  <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
  <script src="js/libs/modernizr-1.7.min.js"></script>

</head>

<body>

  <div id="container">
    <header>
		<h1>TeamTweet.net</h1><p>
    </header>
    <nav>
	<ul id="nav"> 
	<li class="current"><a href="http://teamtweet.net">Home</a></li> 
	<li><a href="#">Baseball</a> 
		<ul> 
			<li><a href="#">American League</a> 
				<ul> 
					<li><a href="./mlb_al.php?var1=New%20York%20Yankees&var2=yankees" target="_blank">New York Yankees</a></li> 
					<li><a href="./mlb_al.php?var1=Tampa%20Bay%20Rays&var2=rays" target="_blank">Tampa Bay Rays</a></li> 
					<li><a href="./mlb_al.php?var1=Boston%20Red%20Sox&var2=redsox" target="_blank">Boston Red Sox</a></li> 
					<li><a href="./mlb_al.php?var1=Toronto%20Blue%20Jays&var2=bluejays" target="_blank">Toronto Blue Jays</a></li> 
					<li><a href="./mlb_al.php?var1=Baltimore%20Orioles&var2=orioles" target="_blank">Baltimore Orioles</a></li> 
					<li><a href="./mlb_al.php?var1=Minnesota%20Twins&var2=twins" target="_blank">Minnesota Twins</a></li> 
					<li><a href="./mlb_al.php?var1=Detroit%20Tigers&var2=tigers" target="_blank">Detroit Tigers</a></li> 
					<li><a href="./mlb_al.php?var1=Chicago%20White%20Sox&var2=whitesox" target="_blank">Chicago White Sox</a></li> 
					<li><a href="./mlb_al.php?var1=Kansas%20City%20Royals&var2=royals" target="_blank">Kansas City Royals</a></li> 
					<li><a href="./mlb_al.php?var1=Cleveland%20Indians&var2=indians" target="_blank">Cleveland Indians</a></li> 
					<li><a href="./mlb_al.php?var1=Texas%20Rangers&var2=rangers" target="_blank">Texas Rangers</a></li> 
					<li><a href="./mlb_al.php?var1=Los%20Angeles%20Angels&var2=angels" target="_blank">Los Angeles Angels</a></li> 
					<li><a href="./mlb_al.php?var1=Oakland%20Athletics&var2=athletics" target="_blank">Oakland Athletics</a></li> 
					<li><a href="./mlb_al.php?var1=Seattle%20Mariners&var2=mariners" target="_blank">Seattle Mariners</a></li>
				</ul> 
			</li> 
			<li><a href="#">National League</a> 
				<ul> 
					<li><a href="./mlb_nl.php?var1=Atlanta%20Braves&var2=braves" target="_blank">Atlanta Braves</a></li> 
					<li><a href="./mlb_nl.php?var1=New%20York%20Mets&var2=mets" target="_blank">New York Mets</a></li> 
					<li><a href="./mlb_nl.php?var1=Philadelphia%20Phillies&var2=phillies" target="_blank">Philadelphia Phillies</a></li> 
					<li><a href="./mlb_nl.php?var1=Florida%20Marlins&var2=marlins" target="_blank">Florida Marlins</a></li> 
					<li><a href="./mlb_nl.php?var1=Washington%20Nationals&var2=nationals" target="_blank">Washington Nationals</a></li> 
					<li><a href="./mlb_nl.php?var1=St%20Louis%20Cardinals&var2=cardinals" target="_blank">St. Louis Cardinals</a></li> 
					<li><a href="./mlb_nl.php?var1=Cincinnati%20Reds&var2=reds" target="_blank">Cincinnati Reds</a></li> 
					<li><a href="./mlb_nl.php?var1=Milwaukee%20Brewers&var2=brewers" target="_blank">Milwaukee Brewers</a></li> 
					<li><a href="./mlb_nl.php?var1=Chicago%20Cubs&var2=cubs" target="_blank">Chicago Cubs</a></li> 
					<li><a href="./mlb_nl.php?var1=Houston%20Astros&var2=astros" target="_blank">Houston Astros</a></li> 
					<li><a href="./mlb_nl.php?var1=Pittsburgh%20Pirates&var2=pirates" target="_blank">Pittsburgh Pirates</a></li> 
					<li><a href="./mlb_nl.php?var1=San%20Diego%20Padres&var2=padres" target="_blank">San Diego Padres</a></li> 
					<li><a href="./mlb_al.php?var1=San%20Francisco%20Giants&var2=giants" target="_blank">San Francisco Giants</a></li> 
					<li><a href="./mlb_nl.php?var1=Los%20Angeles%20Dodgers&var2=dodgers" target="_blank">Los Angeles Dodgers</a></li> 
					<li><a href="./mlb_nl.php?var1=Colorado%20Rockies&var2=rockies" target="_blank">Colorado Rockies</a></li> 
					<li><a href="./mlb_nl.php?var1=Arizona%20Diamondbacks&var2=dbacks" target="_blank">Arizona Diamondbacks</a></li> 
				</ul> 
			</li> 
		</ul> 
	</li> 
	<li><a href="#">Basketball</a> 
		<ul> 
			<li><a href="#">Eastern Conference</a> 
				<ul> 
					<li><a href="./nba_ec.php?var1=Boston%20Celtics&var2=celtics" target="_blank">Boston Celtics</a></li> 
					<li><a href="./nba_ec.php?var1=New%20York%20Knicks&var2=knicks" target="_blank">New York knicks</a></li> 
					<li><a href="./nba_ec.php?var1=Philadelphia%2076ers&var2=phila" target="_blank">Philadelphia 76ers</a></li> 
					<li><a href="./nba_ec.php?var1=New%20Jersey%20Nets&var2=nets" target="_blank">New Jersey Nets</a></li> 
					<li><a href="./nba_ec.php?var1=Toronto%20Raptors&var2=raptors" target="_blank">Toronto Raptors</a></li> 
					<li><a href="./nba_ec.php?var1=Chicago%20Bulls&var2=bulls" target="_blank">Chicago Bulls</a></li> 
					<li><a href="./nba_ec.php?var1=Indiana%20Pacers&var2=pacers" target="_blank">Indiana Pacers</a></li> 
					<li><a href="./nba_ec.php?var1=Milwaukee%20Bucks&var2=bucks" target="_blank">Milwaukee Bucks</a></li> 
					<li><a href="./nba_ec.php?var1=Detroit%20Pistons&var2=pistons" target="_blank">Detroit Pistons</a></li> 
					<li><a href="./nba_ec.php?var1=Cleveland%20Cavaliers&var2=cavaliers" target="_blank">Cleveland Cavaliers</a></li> 
					<li><a href="./nba_ec.php?var1=Miami%20Heat&var2=heat" target="_blank">Miami Heat</a></li> 
					<li><a href="./nba_ec.php?var1=Orlando%20Magic&var2=magic" target="_blank">Orlando Magic</a></li> 
					<li><a href="./nba_ec.php?var1=Atlanta%20Hawks&var2=hawks" target="_blank">Atlanta Hawks</a></li> 
					<li><a href="./nba_ec.php?var1=Charlotte%20Bobcats&var2=bobcats" target="_blank">Charlotte Bobcats</a></li> 
					<li><a href="./nba_ec.php?var1=Washington%20Wizards&var2=wizards" target="_blank">Washington Wizards</a></li> 
				</ul> 
			</li> 
			<li><a href="#">Western Conference</a> 
				<ul> 
					<li><a href="./nba_wc.php?var1=Oklahoma%20City%20Thunder&var2=thunder" target="_blank">Oklahoma City Thunder</a></li> 
					<li><a href="./nba_wc.php?var1=Denver%20Nuggets&var2=nuggets" target="_blank">Denver Nuggets</a></li> 
					<li><a href="./nba_wc.php?var1=Portland%20Trail%20Blazers&var2=blazers" target="_blank">Portland Trailblazers</a></li> 
					<li><a href="./nba_wc.php?var1=Utah%20Jazz&var2=jazz" target="_blank">Utah Jazz</a></li> 
					<li><a href="./nba_wc.php?var1=Minnesota%20Timberwolves&var2=wolves" target="_blank">Minnesota Timberwolves</a></li> 
					<li><a href="./nba_wc.php?var1=Los%20Angeles%20Lakers&var2=lakers" target="_blank">L.A. Lakers</a></li> 
					<li><a href="./nba_wc.php?var1=Phoenix%20Suns&var2=suns" target="_blank">Phoenix Suns</a></li> 
					<li><a href="./nba_wc.php?var1=Golden%20State%20Warriors&var2=warriors" target="_blank">Golden State Warriors</a></li> 
					<li><a href="./nba_wc.php?var1=Los%20Angeles%20Clippers&var2=clippers" target="_blank">L.A. Clippers</a></li> 
					<li><a href="./nba_wc.php?var1=Sacramento%20Kings&var2=kings" target="_blank">Sacramento Kings</a></li> 
					<li><a href="./nba_wc.php?var1=San%20Antonio%20Spurs&var2=spurs" target="_blank">San Antonio Spurs</a></li> 
					<li><a href="./nba_wc.php?var1=Dallas%20Mavericks&var2=mavericks" target="_blank">Dallas Mavericks</a></li> 
					<li><a href="./nba_wc.php?var1=New%20Orleans%20Hornets&var2=hornets" target="_blank">New Orleans Hornets</a></li> 
					<li><a href="./nba_wc.php?var1=Memphis%20Grizzlies&var2=grizzlies" target="_blank">Memphis Grizzlies</a></li> 
					<li><a href="./nba_wc.php?var1=Houston%20Rockets&var2=rockets" target="_blank">Houston Rockets</a></li> 
				</ul> 
			</li>
		</ul> 
	</li> 
	<li><a href="#">Hockey</a> 
		<ul> 
			<li><a href="#">Eastern Conference</a> 
				<ul> 
					<li><a href="#">New York Knicks</a></li> 
					<li><a href="#">Boston Celtics</a></li> 
					<li><a href="#">XXXXXX</a></li> 
				</ul> 
			</li> 
			<li><a href="#">Central Conference</a> 
				<ul> 
					<li><a href="#">New York Knicks</a></li> 
					<li><a href="#">Boston Celtics</a></li> 
					<li><a href="#">XXXXXX</a></li> 
				</ul> 
			</li>
			<li><a href="#">Western Conference</a> 
				<ul> 
					<li><a href="#">New York Knicks</a></li> 
					<li><a href="#">Boston Celtics</a></li> 
					<li><a href="#">XXXXXX</a></li> 
				</ul> 
			</li>
		</ul> 
	</li>
	<li><a href="#">Football</a> 
		<ul> 
			<li><a href="#">NFC</a> 
				<ul> 
					<li><a href="#">New York Knicks</a></li> 
					<li><a href="#">Boston Celtics</a></li> 
					<li><a href="#">XXXXXX</a></li> 
				</ul> 
			</li> 
			<li><a href="#">AFC</a> 
				<ul> 
					<li><a href="#">New York Knicks</a></li> 
					<li><a href="#">Boston Celtics</a></li> 
					<li><a href="#">XXXXXX</a></li> 
				</ul> 
			</li>/
		</ul> 
	</li>		
	<li><a href="#">About Us</a></li> 
	<!-- <li><a href="#">Contact Us</a></li> --> 
</ul>
    </nav>
	<div id="main" role="main">
	<!-- <section id="intro">
		<header>
			<h3>Watch the Royal Wedding tweet stream from the Insiders, the lovers and the Raw Feed.</h3>
		</header>
	</section> -->
	
	<div id="content">
		<section>
			<header>
				<h3>The Royal Wedding <!-- <a href="http://twitter.com/#!/em_henderson" target="_blank">@em_henderson</a>, <a href="http://twitter.com/#!/hgtv" target="_blank">@hgtv</a> --> </h3>
			</header>
			<div class="tw-window01">
				<script src="http://widgets.twimg.com/j/2/widget.js"></script>
				<script>
				new TWTR.Widget({
				  version: 2,
				  type: 'list',
				  rpp: 30,
				  interval: 6000,
				  title: '',
				  subject: 'The Insiders',
				  width: 300,
				  height: 500,
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
				}).render().setList('crackmac', "royalwedding").start();
				</script>
			</div>

			<div class="tw-window02">
				<script src="http://widgets.twimg.com/j/2/widget.js"></script>
				<script>
				new TWTR.Widget({
				  version: 2,
				  type: 'search',
				  search: '<?php echo $raw ?>',
				  interval: 6000,
				  title: '',
				  subject: 'Raw Feed',
				  width: 250,
				  height: 500,
				  theme: {
				    shell: {
				      background: '#4099ff',
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

                        <div class="tw-window03">
                                <script src="http://widgets.twimg.com/j/2/widget.js"></script>
                                <script>
                                new TWTR.Widget({
                                  version: 2,
                                  type: 'search',
                                  search: '<?php echo $love ?>',
                                  interval: 6000,
                                  title: '',
                                  subject: 'Royal Lovers',
                                  width: 250,
                                  height: 500,
                                  theme: {
                                    shell: {
                                      background: '#4099ff',
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

                        <div class="tw-window04">
                                <script src="http://widgets.twimg.com/j/2/widget.js"></script>
                                <script>
                                new TWTR.Widget({
                                  version: 2,
                                  type: 'search',
                                  search: '<?php echo $hate ?>',
                                  interval: 6000,
                                  title: '',
                                  subject: 'Royal Haters',
                                  width: 250,
                                  height: 500,
                                  theme: {
                                    shell: {
                                      background: '#4099ff',
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


		</section>

	</div> <!--! end of content -->
		
    </div> <!--! end of main -->
    	<footer>
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

