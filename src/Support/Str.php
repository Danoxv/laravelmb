<?php

namespace Danoxv\Support;

use voku\helper\UTF8;

class Str
{
    public function strLen(string $string): int
    {
        return UTF8::strlen($string);
    }

    public function strToUpper(string $string): string
    {
        return UTF8::strtoupper($string);
    }

    public function ascii($value, $language = 'en'): string
    {
        return UTF8::to_ascii((string)$value, $language);
    }

    public function finish(string $value, string $cap): string
    {
        return UTF8::str_ensure_right($value, $cap);
    }
    public function firstChar(string $string): string
    {
        return UTF8::first_char($string);
    }
}
