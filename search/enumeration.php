<?php
$words = ['one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight'];

function inWords($words, $search)
{
    foreach ($words as $word) {
        if ($word === $search) {
            return true;
        }
    }

    return false;
}

var_dump(inWords($words, 'nine'));
var_dump(inWords($words, 'six'));