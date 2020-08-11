<?php

namespace Github\Exception;

class TeamsCheckPermissionsForRepoLegacyNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Response if repository is not managed by this team', 404);
    }
}