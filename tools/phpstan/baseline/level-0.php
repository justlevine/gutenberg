<?php declare(strict_types = 1);

$ignoreErrors = [];
$ignoreErrors[] = [
	// identifier: return.missing
	'message' => '#^Function gutenberg_tinycolor_string_to_rgb\\(\\) should return array but return statement is missing\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../../lib/block-supports/duotone.php',
];
$ignoreErrors[] = [
	// identifier: class.notFound
	'message' => '#^Call to static method get_stores\\(\\) on an unknown class WP_Style_Engine_CSS_Rules_Store_Gutenberg\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../../lib/client-assets.php',
];

return ['parameters' => ['ignoreErrors' => $ignoreErrors]];
