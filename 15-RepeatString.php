<?php

function repeatStr(int $n, string $str): string
{
    return str_repeat($str, $n);
}

echo repeatStr(2, "a");
