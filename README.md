# Kirby Minify

Minifies HTML and XML output for [Kirby][F9aPuL] projects.

[F9aPuL]: https://getkirby.com

## General

The plugin extends Kirby’s core template component and directly applies post-processing to template-based HTML and XML output. It removes comments and trims trailing whitespace from text nodes, using [PHP’s native DOM parsers][H4TPPF].

[H4TPPF]: https://www.php.net/releases/8.4/en.php#dom_additions_html5

### Further reading

- [Core components][xLwK4j]
- [Templates][6RHdke]

[xLwK4j]: https://getkirby.com/docs/reference/plugins/components/template
[6RHdke]: https://getkirby.com/docs/guide/templates/basics

## Usage

### Installation

```shell
composer require kenshodigital/kirby-minify ^1.0
```

### Setup

The plugin works out-of-the-box, no further configuration required.
