<?php 

namespace App;

use App\exception\IsNotIntegerException;
use App\exception\IsNumberNotBetween0or3000Exception;

class RomanNumerals
{
    public function generate($number)
    {
        if(!is_integer($number))
        {
            throw new IsNotIntegerException();
        }
        
        if($this->numberIsBetween0and3000($number))
        {
            throw new IsNumberNotBetween0or3000Exception();
        }
    }

    protected function numberIsBetween0and3000($number)
    {
        return $number <= 0 || $number >= 3000;
    }
}

?>