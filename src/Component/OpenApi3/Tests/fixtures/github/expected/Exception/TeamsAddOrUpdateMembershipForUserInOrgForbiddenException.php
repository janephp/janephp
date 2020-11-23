<?php

namespace Github\Exception;

class TeamsAddOrUpdateMembershipForUserInOrgForbiddenException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Response if team synchronization is set up', 403);
    }
}