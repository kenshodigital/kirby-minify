<?php

declare(strict_types=1);

namespace Kensho\Minify;

use Dom\Document;
use Dom\HTMLDocument;
use Dom\Node;
use Dom\XMLDocument;
use Dom\XPath;

function minify(Document $document): Document|HTMLDocument|XMLDocument
{
	$xpath = new XPath(document: $document);

	foreach ($xpath->query(expression: '//comment()') as $comment) {
		/**
		 * Removes comments.
		 *
		 * @var Node $comment
		 */
		$comment->parentNode->removeChild(child: $comment);
	}
	foreach ($xpath->query(expression: '//text()') as $text) {
		/**
		 * Removes whitespace around text nodes.
		 *
		 * @var Node $text
		 */
		$text->textContent = trim(string: $text->textContent);
	}
	return $document;
}
