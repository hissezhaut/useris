<?php

	namespace Useris\Http;

	interface ITransport {
		public function request($method, $url, $headers = null, $body = null);
	}