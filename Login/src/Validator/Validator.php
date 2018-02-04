<?php

namespace Login\Validator;

use Zend\Validator\EmailAddress;
use Zend\Validator\StringLength;
use Zend\Validator\NotEmpty;
use Zend\Filter\HtmlEntities;

class Validator
{
	private $error;

	public function getError()
	{
		return $this->error;
	}

	public function validate( string $email, string $password )
	{
		$filter   = new HtmlEntities(['quotestyle' => ENT_QUOTES]);
		$email    = $filter->filter($email);
		$password = $filter->filter($password);

		$this->validateEmail($email);
		$this->validatePassword($password);
		$this->validateEmpty([$email, $password]);

		if( !empty($this->error) )
		{
			return false;
		}

		return true;
	}

	private function validateEmail( string $email )
	{
		$validator = new EmailAddress();

		$validator->setMessage('Email Address is not valid');

		if( !$validator->isValid($email) )
		{
			$this->error = $validator->getMessages();
		}
	}

	private function validatePassword( string $password )
	{
		$validator = new StringLength(['min' => 5, 'max' => 30]);

		if( !$validator->isValid($password) )
		{
			$this->error = $validator->getMessages();
		}
	}

	private function validateEmpty( array $data )
	{
		$validator = new NotEmpty(NotEmpty::STRING);

		foreach( $data as $key => $value )
		{
			if( !$validator->isValid($value) )
			{
				$this->error = $validator->getMessages();
			}
		}
	}
}