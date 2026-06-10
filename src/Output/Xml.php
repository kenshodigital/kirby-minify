<?php

declare(strict_types=1);

namespace Kensho\Minify\Output;

use Dom\Document;
use Dom\XMLDocument;
use Kensho\Minify\Output;

final class Xml extends Output
{
	protected static function createDocument(string $source): XMLDocument
	{
		return XMLDocument::createFromString(source: $source);
	}

	/**
	 * @param XMLDocument $document
	 */
	protected static function renderDocument(Document $document): string
	{
		return $document->saveXml();
	}
}
