<?php

namespace Wasinpwg\CarbonBuddhistMacros;

use Illuminate\Support\ServiceProvider;

class CarbonBuddhistMacroServiceProvider extends ServiceProvider
{
    public function register()
    {
        (new CarbonBuddhistMacros())->register();
    }
}
