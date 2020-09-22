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

     /**
     * @test
     */
     public function return_X_when_print_10()
     {
          //Arrange

          //Act
          $romanNumber = $this->romanNumerals->generate(10);

          //Asserts
          $this->assertEquals('X',$romanNumber);
     }

     /**
     * @test
     */
     public function return_L_when_print_50()
     {
          //Arrange

          //Act
          $romanNumber = $this->romanNumerals->generate(50);

          //Asserts
          $this->assertEquals('L',$romanNumber);
     }

     /**
     * @test
     */
     public function return_C_when_print_100()
     {
          //Arrange

          //Act
          $romanNumber = $this->romanNumerals->generate(100);

          //Asserts
          $this->assertEquals('C',$romanNumber);
     }

     /**
     * @test
     */
     public function return_D_when_print_500()
     {
          //Arrange

          //Act
          $romanNumber = $this->romanNumerals->generate(500);

          //Asserts
          $this->assertEquals('D',$romanNumber);
     }

     /**
     * @test
     */
     public function return_M_when_print_1000()
     {
          //Arrange

          //Act
          $romanNumber = $this->romanNumerals->generate(1000);

          //Asserts
          $this->assertEquals('M',$romanNumber);
     }

     /**
     * @test
     */
     public function return_VI_when_print_6()
     {
          //Arrange

          //Act
          $romanNumber = $this->romanNumerals->generate(6);

          //Asserts
          $this->assertEquals('VI',$romanNumber); 
     }

     /**
     * @test
     */
    public function return_IV_when_print_4()
    {
         //Arrange

         //Act
         $romanNumber = $this->romanNumerals->generate(4);

         //Asserts
         $this->assertEquals('IV',$romanNumber); 
    }
}

?>