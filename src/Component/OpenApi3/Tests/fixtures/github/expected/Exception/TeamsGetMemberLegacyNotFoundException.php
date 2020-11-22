<?php

namespace Github\Exception;

class TeamsGetMemberLegacyNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Response if user is not a member', 404);
    }
}