<?php
$text = "The quick brown fox jumps over the lazy dog.";
function convertLowercase($conert)
{
    $search = "brown";
    $replace = "red";
    $newtext = str_replace($search, $replace, $conert);
    $afterConvert = strtolower($newtext);
    echo $afterConvert;
}
convertLowercase($text);
