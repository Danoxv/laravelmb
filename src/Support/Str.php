<?php

namespace Danoxv\Support;

use voku\helper\UTF8;

class Str
{
    public function strlen(string $string): int
    {
        return UTF8::strlen($string);
    }
}

$str = new Str();
$str->strlen('Привет');