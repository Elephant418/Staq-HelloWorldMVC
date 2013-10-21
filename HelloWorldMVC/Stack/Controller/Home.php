<?php

namespace HelloWorldMVC\Stack\Controller;

class Home extends Home\__Parent {
	
	public function actionDisplay() {
        // Retrieve a page model by id
        // It will get the data from our data/Page/home.txt
        // It will return an object of type "\Stack\Model\Page"
        $page = (new \Stack\Entity\Page)->fetchById('home');

        // Instance a view
        // It will use our template  template/view/home.twig
		$view = new \Stack\View\Home();

        // We assign our model to the template
		$view['page'] = $page;
		return $view;
	}
}