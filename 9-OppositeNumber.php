<?php

function opposite(int|float $n): int|float
{
    return $n * -1;
}

var_dump(opposite(-1234));
var_dump(opposite(1234));
