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
}

?>