<?php

namespace PicturePark\API\Exception;

class OutputResetRetryAttemptsMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}