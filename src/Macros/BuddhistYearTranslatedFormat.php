<?php

namespace Wasinpwg\CarbonBuddhistMacros\Macros;

/**
 * Formats the current Carbon instance using the Buddhist calendar year.
 *
 * @param  string  $format  The format string according to the PHP date() function.
 *                          It can use 'y' for two-digit year and 'Y' for four-digit year.
 * @return string Formatted string
 *
 * @mixin \Illuminate\Support\Carbon
 */
class BuddhistYearTranslatedFormat
{
    public function __invoke()
    {
        return function ($format) {
            return $this->buddhistDateFormat($format, 'translatedFormat');
        };
    }
}
