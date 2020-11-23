<?php

namespace Github\Exception;

class TeamsRemoveMemberLegacyNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Response if team synchronization is setup', 404);
    }
}