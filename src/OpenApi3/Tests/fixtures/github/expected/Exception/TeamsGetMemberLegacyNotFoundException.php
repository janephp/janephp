<?php

namespace Github\Exception;

class TeamsGetMemberLegacyNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Response if user is not a member');
    }
}