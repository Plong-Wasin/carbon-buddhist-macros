<?php

namespace Wasinpwg\CarbonBuddhistMacros\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Wasinpwg\CarbonBuddhistMacros\CarbonBuddhistMacros;
use Wasinpwg\CarbonBuddhistMacros\CarbonBuddhistMacroServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
        (new CarbonBuddhistMacros())->register();
    }

    protected function getPackageProviders($app)
    {
        return [
            // CarbonBuddhistMacroServiceProvider::class,
        ];
    }
}
