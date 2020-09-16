<?php 

namespace App\exception;

class IsNotIntegerException extends \Exception
{
    public function __construct()
    {
        parent::__construct('Not Integer');
    }
}

?>