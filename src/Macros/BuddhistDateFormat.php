<?php

namespace Wasinpwg\CarbonBuddhistMacros\Macros;

class BuddhistDateFormat
{
    public function __invoke()
    {
        return function ($format, $method) {
            // Define the Buddhist year
            $buddhistYear = $this->year + 543;
            // Define the format replacements for year placeholders
            $formatReplacements = [
                '\y' => '\y', // escape sequence, no change
                '\Y' => '\Y', // escape sequence, no change
                'y' => '!!!!00!!!!', // temporary placeholder for 2-digit year
                'Y' => '!!!!0000!!!!', // temporary placeholder for 4-digit year
            ];

            // Replace the year placeholders in the format string
            $format = strtr($format, $formatReplacements);

            // Get the formatted string using the translated format
            $formattedString = $this->$method($format);

            // Define the replacements for the placeholders with Buddhist year
            $buddhistYearReplacements = [
                '!!!!00!!!!' => substr((string) $buddhistYear, -2), // last 2 digits of the Buddhist year
                '!!!!0000!!!!' => $buddhistYear, // full Buddhist year
            ];

            // Replace the placeholders with the actual Buddhist year
            return strtr($formattedString, $buddhistYearReplacements);
        };
    }
}
