<?php
/**
 * Created by PhpStorm.
 * User: ylsc633@gmail.com
 * Date: 17-1-1
 * Time: 下午4:55
 */

namespace App\Exceptions;

use \Exception;

class DataNullException extends Exception
{
    public function __construct($code, $message = null, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous =null);
    }
}