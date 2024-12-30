<?php declare(strict_types = 1);

$ignoreErrors = [];
$ignoreErrors[] = [
	// identifier: booleanAnd.rightAlwaysTrue
	'message' => '#^Right side of && is always true\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../../gutenberg.php',
];
$ignoreErrors[] = [
	// identifier: booleanOr.alwaysTrue
	'message' => '#^Result of \\|\\| is always true\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../../lib/block-supports/position.php',
];
$ignoreErrors[] = [
	// identifier: booleanNot.alwaysTrue
	'message' => '#^Negated boolean expression is always true\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../../lib/compat/wordpress-6.7/class-wp-block-templates-registry.php',
];
$ignoreErrors[] = [
	// identifier: empty.offset
	'message' => '#^Offset \'rendered\' on array\\{raw\\: mixed\\} in empty\\(\\) does not exist\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../../lib/compat/wordpress-6.8/blocks.php',
];
$ignoreErrors[] = [
	// identifier: deadCode.unreachable
	'message' => '#^Unreachable statement \\- code above always terminates\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../../lib/compat/wordpress-6.8/blocks.php',
];
$ignoreErrors[] = [
	// identifier: return.unusedType
	'message' => '#^Function gutenberg_output_block_nav_menu\\(\\) never returns string so it can be removed from the return type\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../../lib/experimental/navigation-theme-opt-in.php',
];
$ignoreErrors[] = [
	// identifier: if.alwaysTrue
	'message' => '#^If condition is always true\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../../lib/experimental/navigation-theme-opt-in.php',
];
$ignoreErrors[] = [
	// identifier: deadCode.unreachable
	'message' => '#^Unreachable statement \\- code above always terminates\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../../lib/experimental/navigation-theme-opt-in.php',
];

return ['parameters' => ['ignoreErrors' => $ignoreErrors]];
