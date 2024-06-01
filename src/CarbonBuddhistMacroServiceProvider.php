<?php

namespace Wasinpwg\CarbonBuddhistMacros;

use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;

class CarbonBuddhistMacroServiceProvider extends ServiceProvider
{
    public function register()
    {
        Collection::make($this->macros())
            ->reject(fn ($class, $macro) => Carbon::hasMacro($macro))
            ->each(fn ($class, $macro) => Carbon::macro($macro, app($class)()));
    }

    private function macros(): array
    {
        return [
            'buddhistDateFormat' => \Wasinpwg\CarbonBuddhistMacros\Macros\BuddhistDateFormat::class,
            'buddhistYearFormat' => \Wasinpwg\CarbonBuddhistMacros\Macros\BuddhistYearFormat::class,
            'buddhistYearTranslatedFormat' => \Wasinpwg\CarbonBuddhistMacros\Macros\BuddhistYearTranslatedFormat::class,
            'createFromBuddhistYearFormat' => \Wasinpwg\CarbonBuddhistMacros\Macros\CreateFromBuddhistYearFormat::class,
        ];
    }
}
