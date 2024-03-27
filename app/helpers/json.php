<?php

function isJson(string $data)
{
    json_validate($data);

    return json_last_error() === JSON_ERROR_NONE;
}