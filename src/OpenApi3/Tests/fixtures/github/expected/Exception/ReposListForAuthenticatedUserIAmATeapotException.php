<?php

namespace Github\Exception;

class ReposListForAuthenticatedUserIAmATeapotException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Response definition missing', 418);
    }
}