<?php

/**
 * Tweets a message from the user whose user token and secret you use.
 *
 * Although this example uses your user token/secret, you can use
 * the user token/secret of any user who has authorised your application.
 *
 * Instructions:
 * 1) If you don't have one already, create a Twitter application on
 *      http://dev.twitter.com/apps
 * 2) From the application details page copy the consumer key and consumer
 *      secret into the place in this code marked with (YOUR_CONSUMER_KEY
 *      and YOUR_CONSUMER_SECRET)
 * 4) Visit the 'My Access Token' screen linked to from your application
 *      details page
 * 5) Copy the user token and user secret into the place in this code marked
 *      with (A_USER_TOKEN and A_USER_SECRET)
 * 6) Visit this page using your web browser.
 *
 * @author themattharris
 */

require './lib/tmhOAuth.php';
require './lib/tmhUtilities.php';
$tmhOAuth = new tmhOAuth(array(
  'consumer_key'    => 'jXQnVjqOGh4kSGTILOew',
  'consumer_secret' => 'tQgD3sTGTqHF9D9ON6FKxGOjd5UkbR2qqzXIj0AO8',
  'user_token'      => '809495-TwFsinLxqzUZU6Z5Z8IRYSzPKhnFhVhiYwnlWpDQdG8',
  'user_secret'     => 'tgXNrlmPB04YZ7013buxNuVYZA7v4DalHr0e2s0yg0',
));

$code = $tmhOAuth->request('POST', $tmhOAuth->url('1/lists/members/create'), array(
  'list_id' => '42243115',
  'screen_name' => 'babyduane'
//  'id' => 'babyduane'
));

if ($code == 200) {
  tmhUtilities::pr(json_decode($tmhOAuth->response['response']));
} else {
  tmhUtilities::pr($tmhOAuth->response['response']);
}

?>
