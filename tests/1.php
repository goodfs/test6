<?php


function ab(){
    static $a;
    $a=1;
    ++$a;
    return $a;
}

ab();

echo ab();
