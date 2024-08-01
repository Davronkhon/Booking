<?php
<<<<<<< HEAD
=======

>>>>>>> 0bfbe1554d6e061a4edba81280d3c4dc09e368bc
namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Time implements Rule
{
    public function passes($attribute, $value)
    {
        return preg_match('/^(?:2[0-3]|[01][0-9]):[0-5][0-9]$/', $value);
    }

<<<<<<< HEAD
        public function message()
=======
    public function message()
>>>>>>> 0bfbe1554d6e061a4edba81280d3c4dc09e368bc
    {
        return 'The :attribute is not a valid time.';
    }
}
