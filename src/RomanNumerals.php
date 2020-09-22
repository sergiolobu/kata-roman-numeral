<?php 

namespace App;

use App\exception\IsNotIntegerException;
use App\exception\IsNumberNotBetween0or3000Exception;

class RomanNumerals
{
    const BASIC_ROMAN_NUMBERS = 
    [
        1 => 'I',
        5 => 'V',
        10 => 'X',
        50 => 'L',
        100 => 'C',
        500 => 'D',
        1000 => 'M',
    ]; 

    public function generate($number)
    {
        $this->checkIfNumberIsNotInteger($number);

        $this->checkIfNumberIsBetween0and3000($number);

        return self::BASIC_ROMAN_NUMBERS[$number];

    }

    protected function checkIfNumberIsNotInteger($number)
    {
        if(!is_integer($number))
        {
            throw new IsNotIntegerException();
        }
    }

    protected function checkIfNumberIsBetween0and3000($number)
    {
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