<?php

function no_space(string $s): string
{
    return $s = str_replace(" ", "", $s);
}

echo no_space("ASDKOSA SADKOASKD SADKOASKOD");
