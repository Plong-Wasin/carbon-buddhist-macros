# This is my package laravel-carbon-buddhist-macros

[![Latest Version on Packagist](https://img.shields.io/packagist/v/plong-wasin/laravel-carbon-buddhist-macros.svg?style=flat-square)](https://packagist.org/packages/plong-wasin/laravel-carbon-buddhist-macros)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/Plong-Wasin/laravel-carbon-buddhist-macros/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/Plong-Wasin/laravel-carbon-buddhist-macros/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/Plong-Wasin/laravel-carbon-buddhist-macros/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/Plong-Wasin/laravel-carbon-buddhist-macros/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/plong-wasin/laravel-carbon-buddhist-macros.svg?style=flat-square)](https://packagist.org/packages/plong-wasin/laravel-carbon-buddhist-macros)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require wasinpwg/laravel-carbon-buddhist-macros
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

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Wasin Phungwigrai](https://github.com/Plong-Wasin)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
