# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog][eUf2P4] and this project adheres to [Semantic Versioning][8XQWYB].

[eUf2P4]: https://keepachangelog.com/en/2.0.0/
[8XQWYB]: https://semver.org/spec/v2.0.0.html

## [Unreleased]

## [1.1.1] - 2026-06-19

### Fixed

- Reveretd accidental breaking change, restored minification logic for deprecated `Template` class.
  - `\Kensho\Minify\Template`

## [1.1.0] - 2026-06-10

### Added

- New `Output` classes for HTML and XML output.
  - `\Kensho\Minify\Output`
  - `\Kensho\Minify\Output\Html`
  - `\Kensho\Minify\Output\Xml`

### Changed

- `Template` component is no longer replaced with a custom component.
- `page.render:after` hook is now used to trigger minification instead.

### Deprecated

- `Template` class is only kept for backward compatibility and will be removed in next major version.
  - `\Kensho\Minify\Template`

## [1.0.0] - 2026-04-03

### Added

- Initial release.
