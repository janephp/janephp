<?php

namespace Github\Exception;

class ProjectsCreateCardUnprocessableEntityException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Validation Failed', 422);
    }
}