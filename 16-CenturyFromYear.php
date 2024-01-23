<?php

function centuryFromYear($year): int
{
    return ceil($year / 100);
}

echo centuryFromYear(1601);
