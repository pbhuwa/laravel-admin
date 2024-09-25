<?php

use Illuminate\Support\Facades\Request;

function active_menu($path, $active = 'active')
{
    return Request::is($path) ? $active : '';
}
