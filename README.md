# This is my package carbon-buddhist-macros

[![Latest Version on Packagist](https://img.shields.io/packagist/v/plong-wasin/carbon-buddhist-macros.svg?style=flat-square)](https://packagist.org/packages/plong-wasin/carbon-buddhist-macros)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/Plong-Wasin/carbon-buddhist-macros/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/Plong-Wasin/carbon-buddhist-macros/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/Plong-Wasin/carbon-buddhist-macros/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/Plong-Wasin/carbon-buddhist-macros/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/plong-wasin/carbon-buddhist-macros.svg?style=flat-square)](https://packagist.org/packages/plong-wasin/carbon-buddhist-macros)

Enhance your Laravel application with Carbon Buddhist Year Macros. Easily format dates using the Buddhist calendar system.

## Installation

You can install the package via composer:

```bash
composer require wasinpwg/carbon-buddhist-macros
```

## Usage

```php
echo now()->buddhistYearFormat('d/m/Y H:i:s');
echo now()->buddhistYearTranslatedFormat('d/m/Y H:i:s');
$carbon = \Illuminate\Support\Carbon::createFromBuddhistYearFormat('d/m/Y', '01/01/2567');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [Wasin Phungwigrai](https://github.com/Plong-Wasin)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
