<?php

class MainController extends Controller
{
	

	public function init()
	{
		$uri = Yii::app()->baseUrl . '/css/main.css';
		Yii::app()->clientScript->registerCssFile($uri);
		return parent::init();
	}
	
	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}

	
}