<?php 

namespace App;

use App\exception\IsNotIntegerException;
use App\exception\IsNumberNotBetween0or3000Exception;

class RomanNumerals
{
    const SPECIAL_ROMAN_NUMBERS = 
    [
        1000 => 'M',
        900 => 'CM',
        500 => 'D',
        400 => 'CD',
        100 => 'C',
        90 => 'XC',
        50 => 'L',
        40 => 'XL',
        10 => 'X',
        9 => 'IX',
        5 => 'V',
        4 => 'IV',
        1 => 'I',
    ]; 

    public function generate($number)
    {
        $this->checkIfNumberIsNotInteger($number);

        $this->checkIfNumberIsBetween0and3000($number);

        $romanNumber = '';

        foreach(self::SPECIAL_ROMAN_NUMBERS as $key => $specialRomanNumber)
        {
            while($number >= $key)
            {
                $romanNumber .= $specialRomanNumber;

                $number -= $key ;
            }
        }
        
        return $romanNumber;

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