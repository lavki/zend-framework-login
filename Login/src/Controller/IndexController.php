<?php

namespace Login\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Login\Validator\Validator;

class IndexController extends AbstractActionController
{
	
	public function indexAction()
	{
		$request = $this->getRequest();

		if( $request->isPost() )
		{
			$validate = new Validator();

			if( $validate->validate($_POST['email'], $_POST['password']) )
			{
				exit('Validation is ok');
			}

			else
			{
				return new ViewModel([
					'error' => $validate->getError(),
					'email' => $_POST['email'],
				]);
			}
		}

		return new ViewModel();
	}

	private function print_rr($data)
	{
		echo '<pre>';
		print_r($data);
		echo '</pre>';
		exit;
	}
}