<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=Content-type content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width">

    <title>Boilerplate Title</title>

  <link
    rel="stylesheet"
    href="style.css"
    type="text/css"
    media="screen"
    charset="utf-8">

  <!-- Site scripts -->
  <script src="_/js/scripts.js" type="text/javascript" charset="utf-8"></script>

</head>
<body>

<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId: 'YOUR_APP_ID',
      status: true,
      cookie: true,
      xfbml: true
    });

    // Additional initialization code here
    FB.Canvas.setAutoGrow();
  };

  // Load the SDK Asynchronously
  (function(d) {
    var js, id = 'facebook-jssdk';
    if (d.getElementById(id)) {
      return;
    }
    js = d.createElement('script');
    js.id = id;
    js.async = true;
    js.src = "//connect.facebook.net/en_US/all.js";
    d.getElementsByTagName('head')[0].appendChild(js);
  }(document));
</script>

<div class="site-wrapper">

</div><!-- /.site-wrapper -->

<!-- Twitter -->
<script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>

<!-- Google Anlytics -->
<script>
  var _gaq = [
    ['_setAccount', 'UA-XXXXX-X'],
    ['_trackPageview']
  ];
  (function(d, t) {
    var g = d.createElement(t),
        s = d.getElementsByTagName(t)[0];
    g.src = ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g, s)
  }(document, 'script'));
</script>

</body>
</html>