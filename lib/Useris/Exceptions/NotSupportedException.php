<?php

	namespace Useris\Exceptions;

	class NotSupportedException extends UserisException {
		public function __construct($message, $code = 0, $previous = null){
			parent::__construct($message, $code, $previous);
		}
	}