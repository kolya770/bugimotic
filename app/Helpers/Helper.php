<?php

namespace App\Helpers;

class Helper
{
    static function arrayToFindFirstTag($arr)
    {
        $new_str = strstr($arr, '</p>', true);

        return $new_str;

    }
}