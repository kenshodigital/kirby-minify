<?php

declare(strict_types=1);

namespace Kensho\Minify\Output;

use Dom\Document;
use Dom\HTMLDocument;
use Kensho\Minify\Output;

final class Html extends Output
{
	protected static function createDocument(string $source): HTMLDocument
	{
		return HTMLDocument::createFromString(source: $source);
	}

	/**
	 * @param HTMLDocument $document
	 */
	protected static function renderDocument(Document $document): string
	{
		return $document->saveHtml();
	}
}
