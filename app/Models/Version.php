<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class Version {
    /**
     * @property array $versionsProperty
     */
    protected static array $versionsProperty = [
        0 => 'beta-0.1',
        1 => 'beta-0.2',
        2 => 'beta-0.3',
        3 => 'beta-0.4',
        4 => 'beta-0.5',
        5 => 'beta-0.6',
        6 => 'beta-0.7'
    ];

    public static function latest(): string {
        return Arr::last(self::$versionsProperty);
    }

    public static function bump($main = 'beta-0', $sub = 'increment') {
        $newSubInt = 0;

        if ($sub == 'increment') {
            $latest = self::latest();
            $newSubInt = intval(Str::after($latest, '.')) + 1;
        } else {
            $newSubInt = (int)$sub;
        }

        return $main . '.' . $newSubInt;
    }

}
