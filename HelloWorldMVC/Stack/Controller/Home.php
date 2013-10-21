<?php

namespace HelloWorldMVC\Stack\Controller;

class Home extends Home\__Parent {
	
	public function actionDisplay() {
		$view = new \Stack\View\Home();
		$view['content'] = 'Hello World';
		return $view;
	}
}