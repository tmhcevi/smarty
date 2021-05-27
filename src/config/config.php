<?php
return [
	// Smarty template ext
	'extension' => 'tpl',

	'debugging' => false,
	'caching' => true,
	'cache_lifetime' => 120,

	// config paths
	'template_path' => base_path('resources/views'),
	'cache_path' => storage_path('smarty/cache'),
	'compile_path' => storage_path('smarty/compile'),
	'plugins_paths' => [
		base_path('resources/smarty/plugins')
	],
	'config_paths' => [
		base_path('resources/smarty/config')
	],

	// It is valid when the system cache driver is not "file".
	'cache_prefix' => 'smarty',

	// escape HTML: if this is set to true, then all variables will be escaped.
	// See http://www.smarty.net/docs/en/variable.escape.html.tpl
	//
	'escape_html' => false,
    
    // Custom delimiter
    'left_delimiter' => '{',
    'right_delimiter' => '}',
];
