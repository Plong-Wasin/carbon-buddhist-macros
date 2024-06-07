<?php

namespace Wasinpwg\CarbonBuddhistMacros;

use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;
use Wasinpwg\CarbonMacroBuddhist\CarbonMacroBuddhist;

class CarbonBuddhistMacroServiceProvider extends ServiceProvider
{
    public function register()
    {
        (new CarbonBuddhistMacros())->register();
    }
}
