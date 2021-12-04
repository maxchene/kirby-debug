<?php

function debug($var): void
{
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}

function dd($var): void
{
    debug($var);
    die();
}
