<?php declare(strict_types = 1);

$ignoreErrors = [];
$ignoreErrors[] = [
	// identifier: variable.undefined
	'message' => '#^Variable \\$filter_id might not be defined\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../../lib/class-wp-duotone-gutenberg.php',
];
$ignoreErrors[] = [
	// identifier: variable.undefined
	'message' => '#^Variable \\$cache_key might not be defined\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../../lib/global-styles-and-settings.php',
];
$ignoreErrors[] = [
	// identifier: variable.undefined
	'message' => '#^Variable \\$cached might not be defined\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../../lib/global-styles-and-settings.php',
];

return ['parameters' => ['ignoreErrors' => $ignoreErrors]];
