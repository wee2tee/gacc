<?php
$session=new CHttpSession;
$session->open();

$http = new CHttpRequest;
Yii::app()->user->returnUrl=$http->getUrl();
?>
<!DOCTYPE html>
<html lang="<?php echo Yii::app()->language; ?>">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?php echo Yii::app()->name; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="bootstrap/css/sticky-footer-navbar.css" rel="stylesheet">
    
    <!-- Custom each element -->
    <link href="bootstrap/css/custom-bootstrap.css" rel="stylesheet">
    
    <script src="js/jquery.min.js"></script>
    <script>
        function toggleFullScreen() {
            if (!document.fullscreenElement &&    // alternative standard method
                !document.mozFullScreenElement && !document.webkitFullscreenElement && !document.msFullscreenElement ) {  // current working methods
              if (document.documentElement.requestFullscreen) {
                document.documentElement.requestFullscreen();
                $("#gofull, #exitfull").toggle();
              } else if (document.documentElement.msRequestFullscreen) {
                document.documentElement.msRequestFullscreen();
                $("#gofull, #exitfull").toggle();
              } else if (document.documentElement.mozRequestFullScreen) {
                document.documentElement.mozRequestFullScreen();
                $("#gofull, #exitfull").toggle();
              } else if (document.documentElement.webkitRequestFullscreen) {
                document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
                $("#gofull, #exitfull").toggle();
              }
            } else {
              if (document.exitFullscreen) {
                document.exitFullscreen();
                $("#gofull, #exitfull").toggle();
              } else if (document.msExitFullscreen) {
                document.msExitFullscreen();
                $("#gofull, #exitfull").toggle();
              } else if (document.mozCancelFullScreen) {
                document.mozCancelFullScreen();
                $("#gofull, #exitfull").toggle();
              } else if (document.webkitExitFullscreen) {
                document.webkitExitFullscreen();
                $("#gofull, #exitfull").toggle();
              }
            }
        }
    </script>
    
  </head>

  <body>
    <div id="main-view">
    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top custom-color" role="navigation" id="navbar">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <!--<a class="navbar-brand" href="#">gAccount</a>-->
            <?php
                echo CHtml::image("images/logo.png", "gAccount", array("id"=>"gofull", "style"=>"padding-top:1px; padding-right: 5px; padding-left: 5px;", "onclick"=>"return toggleFullScreen()", "title"=> Yii::t("sys_msg", "fullscreen") ));
                echo CHtml::image("images/logo.png", "gAccount", array("id"=>"exitfull", "style"=>"padding-top:1px; padding-right: 5px; padding-left: 5px; display: none;", "onclick"=>"return toggleFullScreen()", "title"=> Yii::t("sys_msg", "exit-fullscreen") ));
            ?>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo Yii::t("navigation", "purchase"); ?> <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#"><?php echo Yii::t("navigation", "purchase-1"); ?></a></li>
                  <li class="divider"></li>
                  <li><a href="#"><?php echo Yii::t("navigation", "purchase-2"); ?></a></li>
                  <li><a href="#"><?php echo Yii::t("navigation", "purchase-3"); ?></a></li>
                  <li class="divider"></li>
                  <li><a href="#"><?php echo Yii::t("navigation", "purchase-4"); ?></a></li>
                  <li><a href="#"><?php echo Yii::t("navigation", "purchase-5"); ?></a></li>
                  <li><a href="#"><?php echo Yii::t("navigation", "purchase-6"); ?></a></li>
                  <li class="divider"></li>
                  <li><a href="#"><?php echo Yii::t("navigation", "purchase-7"); ?></a></li>
                  <li><a href="#"><?php echo Yii::t("navigation", "purchase-8"); ?></a></li>
                  <li class="divider"></li>
                  <li><a href="#"><?php echo Yii::t("navigation", "purchase-9"); ?></a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo Yii::t("navigation", "sales"); ?> <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#"><?php echo Yii::t("navigation", "sales-1"); ?></a></li>
                  <li class="divider"></li>
                  <li><a href="#"><?php echo Yii::t("navigation", "sales-2"); ?></a></li>
                  <li><a href="#"><?php echo Yii::t("navigation", "sales-3"); ?></a></li>
                  <li class="divider"></li>
                  <li><a href="#"><?php echo Yii::t("navigation", "sales-4"); ?></a></li>
                  <li><a href="#"><?php echo Yii::t("navigation", "sales-5"); ?></a></li>
                  <li><a href="#"><?php echo Yii::t("navigation", "sales-6"); ?></a></li>
                  <li class="divider"></li>
                  <li><a href="#"><?php echo Yii::t("navigation", "sales-7"); ?></a></li>
                  <li><a href="#"><?php echo Yii::t("navigation", "sales-8"); ?></a></li>
                  <li class="divider"></li>
                  <li><a href="#"><?php echo Yii::t("navigation", "sales-9"); ?></a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#about" class="dropdown-toggle" data-toggle="dropdown"><?php echo Yii::t("navigation", "finance"); ?> <span class="caret"></span></a>
            </li>
            <li class="dropdown">
                <a href="#contact" class="dropdown-toggle" data-toggle="dropdown"><?php echo Yii::t("navigation", "stock"); ?> <span class="caret"></span></a>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <!-- Begin page content -->
    <div class="container">
      <div class="page-header">
        <h1>Sticky footer with fixed navbar</h1>
      </div>
      <p class="lead">Pin a fixed-height footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS. A fixed navbar has been added with <code>padding-top: 60px;</code> on the <code>body > .container</code>.</p>
      <p>Back to <a href="../sticky-footer">the default sticky footer</a> minus the navbar.</p>
    </div>

    <div class="footer">
      <div class="container">
        <p class="text-muted">Place sticky footer content here.</p>
      </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>-->

    </div>
  </body>
</html>
