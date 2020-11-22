<?php

namespace Github\Exception;

class TeamsCheckPermissionsForProjectInOrgNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Response if project is not managed by this team', 404);
    }
}