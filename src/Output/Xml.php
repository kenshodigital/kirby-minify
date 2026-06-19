<?php

declare(strict_types=1);

namespace Kensho\Minify\Output;

use Deprecated;
use Dom\Document;
use Dom\XMLDocument;
use Kensho\Minify\Output;

#[Deprecated(message: 'will be removed in next major version', since: '1.2')]
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
