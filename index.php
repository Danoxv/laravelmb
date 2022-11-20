<?php

require __DIR__ . '/vendor/autoload.php';

$string = 'Ларавел фреймворк';
$replace = '– PHP-фреймворк';
$offset = 8;

$nativeResult = \Illuminate\Support\Str::substrReplace($string, $replace, $offset);
var_dump($nativeResult);

$fixedResult = \Danoxv\Support\Str::substrReplace($string, $replace, $offset);
var_dump($fixedResult);