<?php

Autoloader::add_classes(array(
	'Fuel\\TwitterOAuth\\TwitterOAuth' => __DIR__.'/classes/twitteroauth.php',
	'Fuel\\TwitterOAuth\\FakeTwitterOAuth' => __DIR__.'/classes/faketwitteroauth.php',
	'TwitterOAuth'                   => __DIR__.'/vendor/twitteroauth/twitteroauth/twitteroauth.php',
));