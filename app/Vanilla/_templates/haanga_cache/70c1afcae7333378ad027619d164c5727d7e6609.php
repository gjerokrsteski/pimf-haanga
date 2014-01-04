<?php
$HAANGA_VERSION  = '1.0.4';
/* Generated from /var/www/pimf-haanga/app/Vanilla/_templates/hello.phtml */
function haanga_70c1afcae7333378ad027619d164c5727d7e6609($vars152c7b3a25f648, $return=FALSE, $blocks=array())
{
    extract($vars152c7b3a25f648);
    if ($return == TRUE) {
        ob_start();
    }
    echo '<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>'.htmlspecialchars($blog_title).'</title>
    <style type="text/css">
        @import url(http://fonts.googleapis.com/css?family=Lobster);
        body {
            font-size   : 12pt;
            color       : #666;
            line-height : 28px;
        }
        a, a:visited {
            color : #2972A2;
        }
        a:hover {
            color : #6ed347;
        }
        h1{
          font-family: \'Lobster\', cursive;
          font-weight: bold;
        }
        h2{
          color: #2972A2;
        }
        footer{
          font-size   : 10pt;
        }
   	</style>
</head>
<body>
  <header>
      <h1>'.htmlspecialchars($blog_title).'</h1>
  </header>
  <hr/>
  <h2>'.htmlspecialchars($blog_content).'</h2>
  <hr/>
  <footer>
        <p>
          <strong>'.htmlspecialchars($blog_footer).'</strong>
          <br />
          Now that you\'re up and running, it\'s time to start creating!
          Here are some links to help you get started:
        </p>

        <ul class="out-links">
          <li><a href="http://pimf-framework.de">Official Website</a></li>
          <li><a href="https://github.com/gjerokrsteski/pimf-framework/wiki">Learning PIMF</a></li>
        </ul>
  </footer>
</body>
</html>
';
    if ($return == TRUE) {
        return ob_get_clean();
    }
}