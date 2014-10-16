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
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />

        <!-- Custom styles for this template -->
        <link href="bootstrap/css/sticky-footer-navbar.css" rel="stylesheet" />

        <!-- Custom each element -->
        <link href="bootstrap/css/custom-bootstrap.css" rel="stylesheet" />

        <!-- jQuery UI Style -->
        <link href="jquery-ui/jquery-ui.min.css" rel="stylesheet" />
        <link href="jquery-ui/jquery-ui.structure.min.css" rel="stylesheet" />
        <link href="jquery-ui/jquery-ui.theme.min.css" rel="stylesheet" />

        <script src="js/jquery.min.js"></script>
        <script src="jquery-ui/jquery-ui.min.js"></script>
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
            
            function toggleMenuAct(elem){
                var cur_state = $(elem).hasClass("active") ? "active" : "inactive";
                $("#main-menu-container li").removeClass("active");
                if(cur_state === "active"){
                    $(elem).removeClass("active");
                }
                else{
                    $(elem).addClass("active");
                }
            }
            
            function toggleSubMenuAct(elem){
                var cur_state = $(elem).hasClass("active") ? "active" : "inactive";
                //var menu_lev = $(elem).parent("ul").attr("class");
                var elems = $(elem).parent("ul").find("ul").toArray();
                for (var i = 0 ; i < elems.length ; i++){
                    $(elems[i]).parent("li").removeClass("active");
                }
                
                if(cur_state === "active"){
                    $(elem).removeClass("active");
                }
                else{
                    $(elem).addClass("active");
                }
            }
            
            function toggleMenuStyle(){
                if($("#menu-toggle-btn").is(":visible")){
                    $("#main-menu-container").addClass("filledwidth");
                }
                else{
                    $("#main-menu-container").removeClass("filledwidth");
                }
            }
        </script>
        <script>
            $(function(){
                toggleMenuStyle();
                
                $(window).resize(function(){ 
                    toggleMenuStyle();
                });
            });
        </script>
    </head>

    <body>
        <div id="main-view">
            <!-- Fixed navbar -->
            <div class="navbar navbar-default navbar-fixed-top custom-color" role="navigation" id="navbar">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button id="menu-toggle-btn" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
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
                        <!-- Main menu -->
                        <?php
                            require_once 'main_menu.php';
                            //require_once '_main_menu.php';
                        ?>
                    </div><!--/.nav-collapse -->
                    <div class="navbar-layer-btn-container">
                        <button type="button" class="navbar-layer-toggle" title="<?php echo Yii::t("sys_msg", "select-window") ?>">
                            <span class="icon-layer1"></span>
                            <span class="icon-layer2"></span>
                            <span class="icon-layer3"></span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Begin page content -->
            <div class="work-space">
                <!-- work space area -->
            </div>

            <div class="footer">
                <span class="ltext">Place text here.</span>
                <span class="rtext">Place text here.</span>
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
