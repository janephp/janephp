<?php

namespace Github\Exception;

class OrgsUpdateUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Validation Failed');
    }
}