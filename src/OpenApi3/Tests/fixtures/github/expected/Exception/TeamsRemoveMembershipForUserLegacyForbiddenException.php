<?php

namespace Github\Exception;

class TeamsRemoveMembershipForUserLegacyForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('Response if team synchronization is set up');
    }
}