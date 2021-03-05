<?php

namespace Github\Exception;

class TeamsGetMembershipForUserInOrgNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Response if user has no team membership');
    }
}