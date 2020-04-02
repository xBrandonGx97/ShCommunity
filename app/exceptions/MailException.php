<?php

namespace App\Exceptions;

use Classes\Exception\SystemException;

class MailException extends SystemException
{
    protected $title = 'Mail Error!';
    protected $message;
    protected $file;
    protected $line;
    protected $code = 0;
    protected $severity = 100;

    public function __construct($message = null)
    {
        if ($message) {
            $this->message = $message;
        }
        parent::__construct($this->message, $this->code, $this->severity, $this->file, $this->line);
    }
}
