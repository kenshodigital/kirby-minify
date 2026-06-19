<?php

declare(strict_types=1);

use Dom\HTMLDocument;
use Dom\XMLDocument;
use Kirby\Cms\App;

use function Kensho\Minify\minify;

App::plugin(name: 'kensho/minify', extends: [
	'hooks' => [
		'page.render:after' => function (string $contentType, string $html): string {
			switch ($contentType) {
				case 'html':
					return minify(document: HTMLDocument::createFromString(source: $html))->saveHtml();
				case 'xml':
					return minify(document: XMLDocument::createFromString(source: $html))->saveXml();
				default:
					return $html;
			}
		},
	],
]);
