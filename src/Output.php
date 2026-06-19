<?php

declare(strict_types=1);

namespace Kensho\Minify;

use Deprecated;
use Dom\Document;
use Dom\Node;
use Dom\XPath;

#[Deprecated(message: 'will be removed in next major version', since: '1.2')]
abstract class Output
{
	private readonly Document $document;
	private readonly XPath $xpath;

	final public function __construct(string $source)
	{
		$this->document = static::createDocument(source: $source);
		$this->xpath = new XPath(document: $this->document);
	}

	abstract protected static function createDocument(string $source): Document;

	final public function minify(): string
	{
		foreach ($this->xpath->query(expression: '//comment()') as $comment) {
			/**
			 * Removes comments.
			 *
			 * @var Node $comment
			 */
			$comment->parentNode->removeChild(child: $comment);
		}
		foreach ($this->xpath->query(expression: '//text()') as $text) {
			/**
			 * Removes whitespace around text nodes.
			 *
			 * @var Node $text
			 */
			$text->textContent = trim(string: $text->textContent);
		}
		return static::renderDocument(document: $this->document);
	}

	abstract protected static function renderDocument(Document $document): string;
}
