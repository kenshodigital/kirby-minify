# Kirby Minify

Minifies HTML and XML output for [Kirby][F9aPuL] projects.

## General

The plugin extends Kirby’s core [template component][6RHdke] and directly applies post-processing to template-based HTML and XML output. It removes comments and trims trailing whitespace from text nodes, using [PHP’s native DOM parsers][H4TPPF].

## Installation

```shell
composer require kenshodigital/kirby-minify ^1.0
```

## Usage

The plugin works out-of-the-box, no further configuration required.

[F9aPuL]: https://getkirby.com
[6RHdke]: https://getkirby.com/docs/guide/templates/basics
[H4TPPF]: https://www.php.net/releases/8.4/en.php#dom_additions_html5
