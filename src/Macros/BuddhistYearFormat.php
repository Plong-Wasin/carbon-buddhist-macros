<?php

namespace Wasinpwg\CarbonBuddhistMacros\Macros;

/**
 * Returns a formatted string of the current Carbon instance using Buddhist
 * calendar year.
 *
 * @param  string  $format  The format string according to the PHP date() function.
 *                          Uses 'y' for 2-digit year and 'Y' for 4-digit year.
 * @return string
 *
 * @mixin \Illuminate\Support\Carbon
 */
class BuddhistYearFormat
{
    public function __invoke()
    {
        return function ($format) {
            return $this->buddhistDateFormat($format, 'format');
        };
    }
}
