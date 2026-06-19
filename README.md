# Kirby Minify

Minifies HTML and XML output for [Kirby][F9aPuL] projects.

[F9aPuL]: https://getkirby.com

## General

The plugin applies post-processing to page-based HTML and XML output. It removes comments and trims trailing whitespace from text nodes, using [PHP’s native DOM parsers][H4TPPF]. PHP’s new HTML5 parser is based on [lexbor][hxzjYF].

[H4TPPF]: https://www.php.net/releases/8.4/en.php#dom_additions_html5
[hxzjYF]: https://lexbor.com

## Usage

### Installation

```shell
composer require kenshodigital/kirby-minify ^1.2
```

### Setup

The plugin works out-of-the-box, no further configuration required.
