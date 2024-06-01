<?php

use Illuminate\Support\Carbon;


it('can create Carbon instance from Buddhist year format', function () {
    $buddhistYear = '2567';
    $format = 'd/m/Y';
    $dateString = '29/02/' . $buddhistYear;
    $carbon = Carbon::createFromBuddhistYearFormat($format, $dateString);
    $gregorianYear = (int) $buddhistYear - 543;
    $expectedDate = $gregorianYear . '-02-29';

    expect($carbon->format('Y-m-d'))->toBe($expectedDate);
});
