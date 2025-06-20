<?php

use CodeIgniter\I18n\Time;

if (!function_exists('current_time')) {
    function current_time($format = 'Y-m-d H:i:s')
    {
        return Time::now()->format($format);
    }
}