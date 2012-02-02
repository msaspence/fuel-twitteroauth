<?php

namespace Fuel\TwitterOAuth;

class FakeTwitterOAuth {

	public $http_code = 200;

	public function getRequestToken($callback)
	{
		$this->callback = $callback;
		return array(
			'oauth_token'=>'iNTtLcg8FzxHX0AN6NzemrUlGqpFWyOsbBm8ksaKKk',
			'oauth_token_secret'=>'G1HAbMWNjWADtFfKdUtiuPZNWCxI6xtaTQVsjKXSM',
			'oauth_callback_confirmed'=>true
		);
	}

	public function lastStatusCode()
	{
		return 200;
	}

	public function getAccessToken()
	{
		return array(
			"oauth_token"=> "476641025-p8xswuZK0N3jJFqOVGBgtBaqdogpHf0AovCXeqB0",
			"oauth_token_secret"=> "LKwjI8NuWT3t2TmiRy1O9Hc5TptgY7YvfTPH2TKQv8",
			"user_id"=> "999999999",
			"screen_name"=> "TestAccount",
		);
	}

  public function getAuthorizeURL($token, $sign_in_with_twitter = TRUE) {
    return $this->callback.(strpos($this->callback, "?") !== false ? "&" : "?")."oauth_verifier=6SglCHqAQzfTv3GpdAoG3rc5EyDp2obnXIvlbl8fRR0&oauth_token=iNTtLcg8FzxHX0AN6NzemrUlGqpFWyOsbBm8ksaKKk";
  }

  public function get($url, $parameters = array())
  {
		switch($url) {
			case 'account/verify_credentials':
				return (object) array(
					'contributors_enabled' => null,
					'protected' => null,
					'location' => 'Canterbury',
					'default_profile_image' => null,
					'friends_count' => 22,
					'profile_background_color' => 'C0DEED',
					'profile_image_url_https' => 'https://twimg0-a.akamaihd.net/sticky/default_profile_images/default_profile_1_reasonably_small.png',
					'name' => "Test Account",
					'profile_background_tile' => null,
					'profile_background_image_url_https' => 'https://twimg0-a.akamaihd.net/images/themes/theme1/bg.png',
					'favourites_count' => 0,
					'followers_count' => 0,
					'url' => 'http://www.example.com',
					'profile_image_url' => 'http://twimg0-a.akamaihd.net/sticky/default_profile_images/default_profile_1_reasonably_small.png',
					'is_translator' => null,
					'show_all_inline_media' => null,
					'utc_offset' => null,
					'profile_sidebar_fill_color' => 'DDEEF6',
					'description' => "This is a test account its not even connecting to the real twitter.",
					'lang' => 'en',
					'time_zone' => null,
					'profile_sidebar_border_color' => 'C0DEED',
					'id_str' => '999999999',
					'listed_count' => 0,
					'geo_enabled' => null,
					'created_at' => "Sat Jan 28 10:21:18 +0000 2012",
					'screen_name' => 'TestAccount',
					'verified' => null,
					'profile_use_background_image' => 1,
					'default_profile' => 1,
					'notifications' => null,
					'profile_text_color' => '333333',
					'follow_request_sent' => null,
					'statuses_count' => 0,
					'profile_background_image_url' => 'http://a0.twimg.com/images/themes/theme1/bg.png',
					'id' => 999999999,
					'following' => null,
					'profile_link_color' => '0084B4'
				);
				break;
		}
  }
}