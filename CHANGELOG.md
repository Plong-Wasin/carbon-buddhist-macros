# Changelog

All notable changes to `carbon-buddhist-macros` will be documented in this file.

## v0.1.0 - 2024-06-05

### Carbon Buddhist Year Macros

Enhance your Laravel application with Carbon Buddhist Year Macros. Easily format dates using the Buddhist calendar system.

```php
echo now()->buddhistYearFormat('d/m/Y H:i:s');
echo now()->buddhistYearTranslatedFormat('d/m/Y H:i:s');
$carbon = \Illuminate\Support\Carbon::createFromBuddhistYearFormat('d/m/Y', '01/01/2567');

```
