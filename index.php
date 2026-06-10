<?php

declare(strict_types=1);

use Kensho\Minify\Output\Html;
use Kensho\Minify\Output\Xml;
use Kirby\Cms\App;

App::plugin(name: 'kensho/minify', extends: [
	'hooks' => [
		'page.render:after' => fn(string $contentType, string $html): string => match ($contentType) {
			'html' => new Html(source: $html)->minify(),
			'xml' => new Xml(source: $html)->minify(),
			default => $html,
		},
	],
]);
