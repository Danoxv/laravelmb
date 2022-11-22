<?php

namespace Danoxv\Support;

use voku\helper\UTF8;

class Str extends \Illuminate\Support\Str
{
    /**
     * Replace text within a portion of a string.
     *
     * @param string|string[] $string
     * @param string|string[] $replace
     * @param int|int[] $offset
     * @param int|int[]|null $length
     * @return string|string[]
     */
    public static function substrReplace($string, $replace, $offset = 0, $length = null)
    {
        return UTF8::substr_replace($string, $replace, $offset, $length);
    }

    public static function after($subject, $search): string
    {
        return UTF8::str_substr_after_first_separator($subject, $search);
    }
}