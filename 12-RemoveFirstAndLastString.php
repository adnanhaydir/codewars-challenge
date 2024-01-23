<?php

function remove_char(string $s): string
{
    return $s = substr($s, 1, -1);
}

echo remove_char("He");
