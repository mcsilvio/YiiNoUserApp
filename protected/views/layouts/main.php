<!doctype html>
<html>
<head>

<?php Yii::app()->getClientScript()->registerCssFile(Yii::app()->baseUrl . '/css/layout.css'); ?>
<?php Yii::app()->getClientScript()->registerCssFile('http://fonts.googleapis.com/css?family=Open+Sans'); ?>
 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="<?php echo CHtml::encode($this->description); ?>" />
<title><?php echo CHtml::encode($this->pageTitle); ?></title>

</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo">BUSINESS NAME<br />And Its Tag Line</div>
		<div id="contactHeader">
			<table>
				<tr><td class="left">Phone:</td><td class="right">555-555-5555</td></tr>
				<tr><td class="left">Email:</td><td class="right">yourname@email.com</td></tr>
				<tr><td class="left">Address:</td><td class="right">99 Netsig Dr, Unit 1, Toronto</td></tr>
			</table>
		</div>
		<div style="clear: both;"></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/main/index')),
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; Business Name<br/>
		All Rights Reserved.<br/>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
