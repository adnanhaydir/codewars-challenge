<?php

function basicOp(string $op, int $val1, int $val2)
{
    if ($op == "+") {
        return $val1 + $val2;
    } elseif ($op == "-") {
        return $val1 - $val2;
    } elseif ($op == "*") {
        return $val1 * $val2;
    } else {
        return $val1 / $val2;
    }
}

echo basicOp("+", 2, 2) . PHP_EOL;
echo basicOp("-", 3, 2) . PHP_EOL;
echo basicOp("*", 5, 2) . PHP_EOL;
echo basicOp("/", 4, 2) . PHP_EOL;
