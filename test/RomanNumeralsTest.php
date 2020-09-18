<?php 

namespace Test;

use PHPUnit\Framework\TestCase;
use App\RomanNumerals;
use App\exception\IsNotIntegerException;

class RomanNumeralsTest extends TestCase
{

    /**
     * @test
    */
    public function throw_exception_when_print_not_integer()
    {
        //Arrange
        $romanNumerals = new RomanNumerals();

        //Act
        $this->expectException(IsNotIntegerException::class);

        //Asserts
        $romanNumerals->generate('hola');
    }

    /**
     * @test
    */
    public function throw_exception_when_number_is_not_between_0_or_3000()
    {
        //Arrange
        $romanNumerals = new RomanNumerals();

        //Act
        $this->expectExceptionMessage('Invalid number, not between 0 or 3000');

        //Asserts
        $romanNumerals->generate(3010);
    }
}

?>