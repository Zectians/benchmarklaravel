<?php

namespace App\Helpers;

class Helpers
{
    public static function randString($length = 8, $timestamp = false)
    {
        $char = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $char .= '1234567890';

        $random_string = '';

        for ($i = 0; $i < $length; $i++) {
            $random_string .= $char[rand(0, strlen($char) - 1)];
        }

        if ($timestamp) {
            $random_string .= date('-dmy-his');
        }

        return $random_string;
    }
}
