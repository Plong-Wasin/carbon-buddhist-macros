<?php

use Illuminate\Support\Carbon;

it('can format current year with "Y" format', function () {
    $carbon = Carbon::parse('2024-01-01');
    $year = (int) $carbon->format('Y');

    expect(+$carbon->buddhistYearFormat('Y'))->toBe($year + 543);
});
