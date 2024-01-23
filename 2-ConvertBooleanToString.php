<?php

function boolToWord($bool)
{
    if ($bool == true) {
        return "True";
    } else {
        return "False";
    }
    return $bool;
}

var_dump(boolToWord(true));
