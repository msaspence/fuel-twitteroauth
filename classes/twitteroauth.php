<?php

namespace Fuel\TwitterOAuth;

class TwitterOAuth extends \TwitterOAuth {

	public static function factory($params = array())
	{
		Config::load('twitter', true);

		$consumer_key = Arr::element($params, 'consumer_key', Config::get('twitter.consumer_key'));
		$consumer_secret = Arr::element($params, 'consumer_secret', Config::get('twitter.consumer_secret'));

		$oauth_token = Arr::element($params, 'oauth_token');
		$oauth_token_secret = Arr::element($params, 'oauth_token_secret');

		return new static($consumer_key, $consumer_secret, $oauth_token, $oauth_token_secret);
	}

}