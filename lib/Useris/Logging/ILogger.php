<?php

	namespace Useris\Logging;

	interface ILogger {
		public function log($message, $type = 'info', $created_at = null);
	}