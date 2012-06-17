<?php
require("lib/twitteroauth/twitteroauth.php");
session_start();

if(!empty($_SESSION['username'])){
    $twitteroauth = new TwitterOAuth('jXQnVjqOGh4kSGTILOew', 'tQgD3sTGTqHF9D9ON6FKxGOjd5UkbR2qqzXIj0AO8', $_SESSION['oauth_token'], $_SESSION['oauth_secret']);
}

//$home_timeline = $twitteroauth->get('statuses/home_timeline', array('count' => 40));
//print_r($home_timeline);

//$home_mentions = $twitteroauth->get('statuses/mentions');
//print_r($home_mentions);

$home_lists_all = $twitteroauth->get('lists/all');
print_r($home_lists_all);

?>