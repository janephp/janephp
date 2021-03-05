<?php

namespace Github\Exception;

class TeamsAddOrUpdateMembershipForUserInOrgForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('Response if team synchronization is set up');
    }
}