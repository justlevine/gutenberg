<?php declare(strict_types = 1);

$ignoreErrors = [];
$ignoreErrors[] = [
	// identifier: foreach.nonIterable
	'message' => '#^Argument of an invalid type null supplied for foreach, only iterables are supported\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../../lib/block-supports/layout.php',
];
$ignoreErrors[] = [
	// identifier: return.empty
	'message' => '#^Function _gutenberg_footnotes_force_filtered_html_on_import_filter\\(\\) should return string but empty return statement found\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../../lib/blocks.php',
];
$ignoreErrors[] = [
	// identifier: method.childParameterType
	'message' => '#^Parameter \\#1 \\$id \\(int\\) of method WP_REST_Global_Styles_Controller_Gutenberg\\:\\:prepare_links\\(\\) should be compatible with parameter \\$post \\(WP_Post\\) of method WP_REST_Posts_Controller\\:\\:prepare_links\\(\\)$#',
	'count' => 1,
	'path' => __DIR__ . '/../../../lib/class-wp-rest-global-styles-controller-gutenberg.php',
];
$ignoreErrors[] = [
	// identifier: assign.propertyType
	'message' => '#^Property WP_Theme_JSON_Data_Gutenberg\\:\\:\\$theme_json \\(WP_Theme_JSON\\) does not accept WP_Theme_JSON_Gutenberg\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../../lib/class-wp-theme-json-data-gutenberg.php',
];
$ignoreErrors[] = [
	// identifier: return.type
	'message' => '#^Method WP_Theme_JSON_Gutenberg\\:\\:get_block_selectors\\(\\) should return object but returns array\\<string, array\\<string, string\\>\\|string\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../../lib/class-wp-theme-json-gutenberg.php',
];
$ignoreErrors[] = [
	// identifier: return.type
	'message' => '#^Method WP_Theme_JSON_Resolver_Gutenberg\\:\\:get_block_data\\(\\) should return WP_Theme_JSON_Gutenberg but returns WP_Theme_JSON\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../../lib/class-wp-theme-json-resolver-gutenberg.php',
];
$ignoreErrors[] = [
	// identifier: return.type
	'message' => '#^Method WP_Theme_JSON_Resolver_Gutenberg\\:\\:get_core_data\\(\\) should return WP_Theme_JSON_Gutenberg but returns WP_Theme_JSON\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../../lib/class-wp-theme-json-resolver-gutenberg.php',
];
$ignoreErrors[] = [
	// identifier: return.type
	'message' => '#^Method WP_Theme_JSON_Resolver_Gutenberg\\:\\:get_user_data\\(\\) should return WP_Theme_JSON_Gutenberg but returns WP_Theme_JSON\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../../lib/class-wp-theme-json-resolver-gutenberg.php',
];
$ignoreErrors[] = [
	// identifier: assign.propertyType
	'message' => '#^Static property WP_Theme_JSON_Resolver_Gutenberg\\:\\:\\$blocks \\(WP_Theme_JSON_Gutenberg\\) does not accept WP_Theme_JSON\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../../lib/class-wp-theme-json-resolver-gutenberg.php',
];
$ignoreErrors[] = [
	// identifier: assign.propertyType
	'message' => '#^Static property WP_Theme_JSON_Resolver_Gutenberg\\:\\:\\$blocks \\(WP_Theme_JSON_Gutenberg\\) does not accept null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../../lib/class-wp-theme-json-resolver-gutenberg.php',
];
$ignoreErrors[] = [
	// identifier: assign.propertyType
	'message' => '#^Static property WP_Theme_JSON_Resolver_Gutenberg\\:\\:\\$core \\(WP_Theme_JSON_Gutenberg\\) does not accept WP_Theme_JSON\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../../lib/class-wp-theme-json-resolver-gutenberg.php',
];
$ignoreErrors[] = [
	// identifier: assign.propertyType
	'message' => '#^Static property WP_Theme_JSON_Resolver_Gutenberg\\:\\:\\$core \\(WP_Theme_JSON_Gutenberg\\) does not accept null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../../lib/class-wp-theme-json-resolver-gutenberg.php',
];
$ignoreErrors[] = [
	// identifier: assign.propertyType
	'message' => '#^Static property WP_Theme_JSON_Resolver_Gutenberg\\:\\:\\$i18n_schema \\(array\\) does not accept null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../../lib/class-wp-theme-json-resolver-gutenberg.php',
];
$ignoreErrors[] = [
	// identifier: assign.propertyType
	'message' => '#^Static property WP_Theme_JSON_Resolver_Gutenberg\\:\\:\\$theme \\(WP_Theme_JSON_Gutenberg\\) does not accept WP_Theme_JSON\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../../lib/class-wp-theme-json-resolver-gutenberg.php',
];
$ignoreErrors[] = [
	// identifier: assign.propertyType
	'message' => '#^Static property WP_Theme_JSON_Resolver_Gutenberg\\:\\:\\$theme \\(WP_Theme_JSON_Gutenberg\\) does not accept null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../../lib/class-wp-theme-json-resolver-gutenberg.php',
];
$ignoreErrors[] = [
	// identifier: assign.propertyType
	'message' => '#^Static property WP_Theme_JSON_Resolver_Gutenberg\\:\\:\\$user \\(WP_Theme_JSON_Gutenberg\\) does not accept null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../../lib/class-wp-theme-json-resolver-gutenberg.php',
];
$ignoreErrors[] = [
	// identifier: assign.propertyType
	'message' => '#^Static property WP_Theme_JSON_Resolver_Gutenberg\\:\\:\\$user_custom_post_type_id \\(int\\) does not accept null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../../lib/class-wp-theme-json-resolver-gutenberg.php',
];
$ignoreErrors[] = [
	// identifier: offsetAssign.dimType
	'message' => '#^Cannot assign offset \'_fields\' to WP_REST_Request\\<array\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../../lib/experimental/media/class-gutenberg-rest-attachments-controller.php',
];
$ignoreErrors[] = [
	// identifier: offsetAssign.dimType
	'message' => '#^Cannot assign offset \'context\' to WP_REST_Request\\<array\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../../lib/experimental/media/class-gutenberg-rest-attachments-controller.php',
];
$ignoreErrors[] = [
	// identifier: offsetAssign.valueType
	'message' => '#^WP_REST_Request\\<array\\> does not accept string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../../lib/experimental/media/class-gutenberg-rest-attachments-controller.php',
];
return ['parameters' => ['ignoreErrors' => $ignoreErrors]];
