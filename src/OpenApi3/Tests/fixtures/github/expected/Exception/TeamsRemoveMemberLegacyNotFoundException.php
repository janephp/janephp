<?php

namespace Github\Exception;

class TeamsRemoveMemberLegacyNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Response if team synchronization is setup');
    }
}