<?php
/**
 * Created by PhpStorm.
 * User: ylsc633@gmail.com
 * Date: 17-1-1
 * Time: 上午3:44
 */
namespace App\Exceptions;

use \Exception;

class ValidatorException extends Exception
{
    public function __construct($code, $message = null, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous =null);
    }
}