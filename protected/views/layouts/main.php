<?php /* @var $this Controller */ ?>
<?php Yii::app()->bootstrap->register(); ?>
<!DOCTYPE html>
<html lang="th">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="th" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
            <div id="logo" style="display: none;"><?php echo CHtml::encode(Yii::app()->name); ?></div>
            <div id="mainmenu">
                <?php
                    echo TbHtml::buttonDropdown('ระบบซื้อ', array(
                        array('label' => '1.จ่ายเงินมัดจำ', 'url' => '#'),
                        TbHtml::menuDivider(),
                        array('label' => '2.ใบเสนอซื้อ', 'url' => '#'),
                        array('label' => '3.ใบสั่งซื้อ', 'url' => '#'),
                        TbHtml::menuDivider(),
                        array('label' => '4.ซื้อเงินสด', 'url' => '#'),
                        array('label' => '5.ซื้อเงินเชื่อ', 'url' => '#'),
                        array('label' => '6.บันทึกค่าใช้จ่ายอื่น ๆ', 'url' => '#'),
                        ));
                    echo TbHtml::buttonDropdown('ระบบขาย', array(
                        array('label' => 'Action', 'url' => '#'),
                        array('label' => 'Another action', 'url' => '#'),
                        array('label' => 'Something else here', 'url' => '#'),
                        TbHtml::menuDivider(),
                        array('label' => 'Separate link', 'url' => '#'),
                        ));
                ?>
            </div><!-- mainmenu -->
	</div><!-- header -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
