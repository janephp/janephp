<?php

namespace Github\Exception;

class TeamsAddMemberLegacyNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Response if team synchronization is set up');
    }
}