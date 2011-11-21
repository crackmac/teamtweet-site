<script src="http://platform.twitter.com/anywhere.js?id=jXQnVjqOGh4kSGTILOew&v=1" type="text/javascript"></script>
<script>
  function toggleElement(elemId) {
        var element = document.getElementById(elemId);
        var current = element.style.display;
        if (current == "block") {
          element.style.display = "none";
        } else {
          element.style.display = "block";
        }
      }
</script>

<script type="text/javascript">
  twttr.anywhere(function (T) {
    T("#tweet-box-teamtweet").tweetBox({
      height: 100,
      width: 220,
      label: "Tweet it...",
      defaultContent: "#teamtweet.net"
    });
  });
</script>