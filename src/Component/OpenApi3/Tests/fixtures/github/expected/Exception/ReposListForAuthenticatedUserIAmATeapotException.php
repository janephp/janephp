<?php

namespace Github\Exception;

class ReposListForAuthenticatedUserIAmATeapotException extends IAmATeapotException
{
    public function __construct()
    {
        parent::__construct('Response definition missing');
    }
}