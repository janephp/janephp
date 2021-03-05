<?php

namespace Github\Exception;

class TeamsCheckPermissionsForProjectLegacyNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Response if project is not managed by this team');
    }
}