<?php 

namespace App;

use App\exception\IsNotIntegerException;

class RomanNumerals
{
    public function generate($number)
    {
        if(!is_integer($number))
        {
            throw new IsNotIntegerException();
        }
    }
}

?>