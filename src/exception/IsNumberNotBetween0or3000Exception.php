<?php 

namespace App\exception;

class IsNumberNotBetween0or3000Exception extends \Exception
{
    public function __construct()
    {
        parent::__construct('Invalid number, not between 0 or 3000');
    }
}

?>