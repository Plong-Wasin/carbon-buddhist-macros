<?php

namespace Wasinpwg\CarbonBuddhistMacros;

use Illuminate\Support\Carbon;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class CarbonBuddhistMacroServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-carbon-buddhist-macros');
    }

    public function boot()
    {
        Carbon::macro('buddhistFormatHelper', function ($format, $callback) {
            $buddhistYear = $this->year + 543;
            $format = strtr($format, [
                '\y' => '\y',
                '\Y' => '\Y',
                'y' => '!!!!00!!!!',
                'Y' => '!!!!0000!!!!',
            ]);
            $string = $callback($format);

            return strtr($string, [
                '!!!!00!!!!' => substr((string) $buddhistYear, -2),
                '!!!!0000!!!!' => $buddhistYear,
            ]);
        });

        Carbon::macro('buddhistFormat', function ($format) {
            return $this->buddhistFormatHelper($format, function ($format) {
                return $this->format($format);
            });
        });

        Carbon::macro('buddhistTranslatedFormat', function ($format) {
            return $this->buddhistFormatHelper($format, function ($format) {
                return $this->translatedFormat($format);
            });
        });
        Carbon::macro('createFromBuddhistFormat', function ($format, $time, $timezone = null) {
            $year = $this->createFromFormat('Y', $time, $timezone)->year;
            $format = strtr($format, [
                '\y' => '\y',
                '\Y' => '\Y',
                'y' => '!!!!' . substr((string) (+$year - 543), -2) . '!!!!',
                'Y' => '!!!!' . substr((string) (+$year - 543), -4) . '!!!!',
            ]);

            return $this->createFromFormat($format, $time, $timezone);
        });
    }
}
