<?php

new Jetpack_JSON_API_Plugins_Get_Endpoint(
	array(
		'description'          => 'Get the Plugin data.',
		'method'               => 'GET',
		'path'                 => '/sites/%s/plugins/%s/',
		'min_version'          => '1',
		'max_version'          => '1.1',
		'stat'                 => 'plugins:1',
		'path_labels'          => array(
			'$site'   => '(int|string) The site ID, The site domain',
			'$plugin' => '(string) The plugin ID',
		),
		'response_format'      => Jetpack_JSON_API_Plugins_Endpoint::$_response_format,
		'example_request_data' => array(
			'headers' => array(
				'authorization' => 'Bearer YOUR_API_TOKEN'
			),
		),
		'example_request'      => 'https://public-api.wordpress.com/rest/v1/sites/example.wordpress.org/plugins/hello-dolly%20hello'
	)
);
// v1.2
new Jetpack_JSON_API_Plugins_Get_Endpoint(
	array(
		'description'          => 'Get the Plugin data.',
		'method'               => 'GET',
		'path'                 => '/sites/%s/plugins/%s/',
		'min_version'          => '1.2',
		'stat'                 => 'plugins:1',
		'path_labels'          => array(
			'$site'   => '(int|string) The site ID, The site domain',
			'$plugin' => '(string) The plugin ID',
		),
		'response_format'      => Jetpack_JSON_API_Plugins_Endpoint::$_response_format_v1_2,
		'example_request_data' => array(
			'headers' => array(
				'authorization' => 'Bearer YOUR_API_TOKEN'
			),
		),
		'example_request'      => 'https://public-api.wordpress.com/rest/v1.2/sites/example.wordpress.org/plugins/hello-dolly%20hello'
	)
);


class Jetpack_JSON_API_Plugins_Get_Endpoint extends Jetpack_JSON_API_Plugins_Endpoint {
	// GET  /sites/%s/plugins/%s
	protected $needed_capabilities = 'activate_plugins';
}
