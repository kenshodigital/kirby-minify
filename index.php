<?php declare(strict_types=1);

use Kensho\Minify\Template;
use Kirby\Cms\App;

App::plugin(name: 'kensho/minify', extends: [
	'components' => [
		'template' => fn(
			App $kirby,
			string $name,
			string $type = 'html',
			string $defaultType = 'html',
		): Template => new Template(name: $name, type: $type, defaultType: $defaultType),
	],
]);
