<?php

namespace Wasinpwg\CarbonBuddhistMacros\Macros;

use Illuminate\Support\Carbon;

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
            $hasYearFormat = str_contains($format, 'y') || str_contains($format, 'Y');
            if (!$hasYearFormat) {
                return Carbon::createFromFormat($format, $time, $timezone);
            }
            try {
                $date = Carbon::createFromFormat($format, $time, $timezone);
                $year = $date->year;
                if (!str_contains($format, 'y')) {
                    $newTime = strtr($time, [
                        (string)$year => (string)($year - 543),
                    ]);

                    return Carbon::createFromFormat($format, $newTime, $timezone);
                }
            } catch (\Exception $e) {
            }
            $date = Carbon::createFromFormat($format, $time, $timezone);
            if ($date->format($format) == $time) {
                return $date->subYears(543);
            }

            $date = $date->subYears(543);
            if (!$date->isLeapYear()) {
                return $date;
            }
            if ($date->format('m-d') == '03-01') {
                return $date->subDay();
            }
            return $date;
        };
    }
}
