<?php 

namespace Test;

use PHPUnit\Framework\TestCase;
use App\RomanNumerals;
use App\exception\IsNotIntegerException;

class RomanNumeralsTest extends TestCase
{
    protected $romanNumerals;

    protected function setUp():void
    {
        parent::setUp();
        $this->romanNumerals = new RomanNumerals();
    }

    /**
     * @test
    */
    public function throw_exception_when_print_not_integer()
    {
        //Arrange

        //Act
        $this->expectException(IsNotIntegerException::class);

        //Asserts
        $this->romanNumerals->generate('hola');
    }

    /**
     * @test
    */
    public function throw_exception_when_number_is_not_between_0_or_3000()
    {
        //Arrange

        //Act
        $this->expectExceptionMessage('Invalid number, not between 0 or 3000');

        //Asserts
        $this->romanNumerals->generate(3010);
    }

    /**
     * @test
     */
    public function return_I_when_print_1()
    {
         //Arrange

         //Act
         $romanNumber = $this->romanNumerals->generate(1);
 
         //Asserts
         $this->assertEquals('I',$romanNumber);
    }

    /**
     * @test
     */
    public function return_V_when_print_5()
    {
         //Arrange

         //Act
         $romanNumber = $this->romanNumerals->generate(5);
 
         //Asserts
         $this->assertEquals('V',$romanNumber);
    }
}

?>