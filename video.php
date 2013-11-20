<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Simple Vulnerable App Using Bootstrap as its Design">
    <meta name="author" content="Jay Turla, @shipcod3">

    <title>Vulnstrap</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

  </head>

  <body>

    <div class="container">
      <div class="navbar navbar-inverse">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Vulnstrap</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="#">About Vulnstrap</a></li>
            <li><a href="#">Credits</a></li>
            <li class="dropdown active">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Play Me! <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="blog.php?id=1">Why We Should Party?</a></li>
                <li class="divider"></li>
                <li><a href="dig.php">Search MX record</a></li>
                <li class="divider"></li>
                <li><a href="video.php">Watch Pr*n</a></li>
                <li class="divider"></li>
                <li><a href="dom.php">Prepare to be DOM'ed</a></li>
                <li class="divider"></li>
                <li><a href="include.php">Include a File</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>

      <div class="jumbotron jumbopacity">
        <img src="images/porn.png" />
        
        <p><a href="js/video-js.swf">Video JS</a></p>

        <p><a href="js/player.swf">JW Player</a></p>

        <p><a href="js/clipboard.swf">SyntaxHighlighter</a></p>

        <p><a href="js/swfupload.swf">SWFUpload</a></p>

        <p><a href="js/plupload.flash.swf">Plupload</a></p>

      </div>
      </div>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
