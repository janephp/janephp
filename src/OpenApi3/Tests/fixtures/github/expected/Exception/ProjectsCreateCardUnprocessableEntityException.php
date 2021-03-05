<?php

namespace Github\Exception;

class ProjectsCreateCardUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Validation Failed');
    }
}