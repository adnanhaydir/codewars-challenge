<?php

function makeNegative($num)
{
    return $num = $num <= 0 ? $num : -$num;
}

echo makeNegative(25);
