<?php

namespace Github\Exception;

class TeamsGetMembershipForUserInOrgNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Response if user has no team membership', 404);
    }
}