<?php 

namespace App;

use App\exception\IsNotIntegerException;
use App\exception\IsNumberNotBetween0or3000Exception;

class RomanNumerals
{
    public function generate($number)
    {
        $this->checkIfNumberIsNotInteger($number);

        $this->checkIfNumberIsBetween0and3000($number);

        if($number == 1)
        {
            return 'I';
        }

        if($number == 5)
        {
            return 'V';
        }

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