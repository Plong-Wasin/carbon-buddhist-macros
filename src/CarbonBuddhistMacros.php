<?php

namespace Wasinpwg\CarbonBuddhistMacros;

use Carbon\Carbon;

class CarbonBuddhistMacros
{
    public function register()
    {
        $macros = $this->macros();

        foreach ($macros as $macro => $class) {
            if (!Carbon::hasMacro($macro)) {
                Carbon::macro($macro, (new $class)());
            }
        }
    }

    public function macros(): array
    {
        return [
            'buddhistDateFormat' => \Wasinpwg\CarbonBuddhistMacros\Macros\BuddhistDateFormat::class,
            'buddhistYearFormat' => \Wasinpwg\CarbonBuddhistMacros\Macros\BuddhistYearFormat::class,
            'buddhistYearTranslatedFormat' => \Wasinpwg\CarbonBuddhistMacros\Macros\BuddhistYearTranslatedFormat::class,
            'createFromBuddhistYearFormat' => \Wasinpwg\CarbonBuddhistMacros\Macros\CreateFromBuddhistYearFormat::class,
        ];
    }
}
