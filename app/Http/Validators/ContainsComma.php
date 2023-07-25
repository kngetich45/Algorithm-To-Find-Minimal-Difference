<?php

namespace App\Http\Validators;

use Illuminate\Contracts\Validation\Rule;

class ContainsComma implements Rule
{
    public function passes($attribute, $value)
    {
        return strpos($value, ',') !== false;
    }

    public function message()
    {
        return 'The :attribute must contain at least one comma.';
    }
}
