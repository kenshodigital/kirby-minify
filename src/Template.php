<?php declare(strict_types=1);

namespace Kensho\Minify;

use Dom\Document;
use Dom\HTMLDocument;
use Dom\Node;
use Dom\XMLDocument;
use Dom\XPath;

final class Template extends \Kirby\Template\Template
{
	public function render(array $data = []): string
	{
		$output = parent::render(data: $data);

		if ($this->type === 'html') {
			$document = HTMLDocument::createFromString(source: $output);
			$this->minify($document);
			return $document->saveHtml();
		}
		if ($this->type === 'xml') {
			$document = XMLDocument::createFromString(source: $output);
			$this->minify($document);
			return $document->saveXml();
		}
		return $output;
	}

	private function minify(Document $document): void
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
	}
}
