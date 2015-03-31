<?php

	namespace Useris\Exceptions;

	class ServiceException extends UserisException {
		private $_error_code;
		
		public function __construct($error_code, $message){
			$this->_error_code = $error_code;
			parent::__construct($message);
		}

		public function getErrorCode(){
			return $this->_error_code;
		}
	}