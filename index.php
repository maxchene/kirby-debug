<?php

function debug($var): void
{
    echo '<code>';
    var_dump($var);
    echo '</code>';
}

function dd($var): void
{
    debug($var);
    die();
}
