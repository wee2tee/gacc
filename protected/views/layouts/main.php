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
        <script src="js/<?php echo Yii::app()->session['sess_lang'] == 'th' ? 'msg_th.js' : 'msg_en.js' ?>"></script>
        <script src="js/event_fn/glob_event.js"></script>
    </head>

    <body>
        <div id="dialog-overlay"><div id="dialog-message"></div></div>
        <div id="main-view">
            <!-- Fixed navbar -->
            <div class="navbar navbar-default navbar-fixed-top custom-color" role="navigation" id="navbar">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <!--<a class="navbar-brand" href="#">gAccount</a>-->
                        <?php
                            echo CHtml::image("images/logo36_22.png", "gAccount", array( "style"=>"padding-top: 1px; padding-right: 5px; padding-left: 5px;" ));
                        ?>
                    </div>
                    <div class="collapse navbar-collapse" id="navbar-container">
                        <!-- Main menu -->
                        <?php
                            require_once 'main_menu.php';
                            //require_once '_main_menu.php';
                        ?>
                    </div><!--/.nav-collapse -->
                    <div class="navbar-btn-container fullscreen-btn">
                        <button type="button" class="navbar-fullscreen-toggle" title="<?php echo Yii::t("sys_msg", "toggle-screen") ?>" onclick="return toggleFullScreen()">
                            <div class="arrow"></div>
                            <div class="sm-monitor-border"><div class="sm-monitor"></div></div>
                            <div class="lg-monitor-border"><div class="lg-monitor"></div></div>
                        </button>
                    </div>
                    <div class="navbar-btn-container layer-btn">
                        <button type="button" class="navbar-layer-toggle disabled" id="navbar-layer-toggle" title="<?php echo Yii::t("sys_msg", "select-window") ?>" onclick="return showAppLayerSelector($(this))">
                            <span class="ic layer1" id="appform-count">0</span>
                            <span class="ic layer2"></span>
                            <span class="ic layer3"></span>
                        </button>
                        <!--<ul class="app-layer-panel">
                            <li><span>ขายเงินเชื่อ</span><button class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i> </button></li>
                        </ul>-->
                    </div>
                    <div class="navbar-btn-container resp-menu">
                        <button id="menu-toggle-btn" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Begin page content -->
            <div class="work-space" id="work-space">
                <!-- work space area -->
            </div>
            <div class="app-layer-panel" id="app-layer-panel">
                <!-- app selection -->
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
