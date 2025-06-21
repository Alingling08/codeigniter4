<?php

namespace App\Validation;

class BirthdateNotInFuture
{
    public function date_not_in_future(string $date): bool
    {
        return strtotime($date) <= strtotime(date('Y-m-d'));
    }
}
