<?php

use app\support\Flash;

function flash(string $index, string $css = '')
{
    $message = Flash::get($index);

    return "<span style='{$css}'>{$message}</span>";
}