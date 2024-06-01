<?php

namespace Wasinpwg\CarbonBuddhistMacros\Macros;


/**
 * Format the current Carbon instance using the Buddhist calendar year.
 *
 * @param string $format The format string according to the PHP date() function.
 *     It can use 'y' for two-digit year and 'Y' for four-digit year.
 * @param string $time The date string to parse using the given format.
 * @param string|null $timezone The timezone identifier.
 * @return \Illuminate\Support\Carbon
 * @mixin \Illuminate\Support\Carbon
 */
class CreateFromBuddhistYearFormat
{

    public function __invoke()
    {
        return function ($format, $time, $timezone = null) {
            $adYear = $this->createFromFormat('Y', $time, $timezone)->year;
            $buddhistYear = $adYear + 543;
            $formatReplacements = [
                '\y' => '\y',
                '\Y' => '\Y',
                'y' => substr((string) $buddhistYear, -2),
                'Y' => (string) $buddhistYear,
            ];

            $formattedString = $this->createFromFormat($format, $time, $timezone);
            return $formattedString->format(strtr($format, $formatReplacements));
        };
    }
}
