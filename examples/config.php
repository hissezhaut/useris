<?php

	$loader = require __DIR__ . "/../vendor/autoload.php";
	$loader->addPsr4('Useris\\', __DIR__.'/Useris');

	define("USERIS_APP_ID", "YOUR APP ID");
	define("USERIS_TOKEN", "YOUR TOKEN");

?>