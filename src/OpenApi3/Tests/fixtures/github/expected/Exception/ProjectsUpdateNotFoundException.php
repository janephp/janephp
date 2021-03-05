<?php

namespace Github\Exception;

class ProjectsUpdateNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Response if the authenticated user does not have access to the project');
    }
}