<?php

namespace Github\Exception;

class ProjectsUpdateNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Response if the authenticated user does not have access to the project', 404);
    }
}