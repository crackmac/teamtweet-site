<?php 

$team_name = $_GET['var1']; 
$team_name_array = explode(" ", $team_name);
$count=count($team_name_array);
//echo $count . "\n";
//echo $team_name_array[0] . "\n";
//echo $team_name_array[1] . "\n";
//echo $team_name_array[2] . "\n";
$team_common_name = $_GET['var2'];
$hate="hate  $team_common_name OR \"$team_name_array[1] OR $team_name_array[2]\"";
//echo $hate;
$list_name="mlb-" . $team_common_name;
//echo $list_name;
$raw="$team_common_name OR \"$team_name_array[1] OR $team_name_array[2]\"";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?php echo $team_name ?> Team Tweet</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="style.css" />

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-147594-4']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body>

<div id="headline">
<h1><?php echo "$team_name" ?></h1>
</div>

<div id="tweets_expert">
<script src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'list',
  rpp: 30,
  interval: 6000,
  title: '',
  subject: 'Expert Stream',
  width: 600,
  height: 345,
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
}).render().setList('tt_mlb_al', "<?php echo $list_name ?>").start();
</script>

</div>


<div id="ad_250x250">
<script type="text/javascript"><!--
google_ad_client = "pub-9390376094875390";
/* 250x250, Baseball */
google_ad_slot = "0170839119";
google_ad_width = 250;
google_ad_height = 250;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>

<div id="tweets_trash">
<script src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'search',
  search: '<?php echo $hate ?>',
  interval: 6000,
  title: '',
  subject: 'Trash Talk',
  width: 250,
  height: 375,
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

<div id="tweets_raw">
<script src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'search',
  search: '<?php echo $raw ?>',
  interval: 6000,
  title: '',
  subject: 'Raw Feed',
  width: 600,
  height: 250,
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

</body>
</html>