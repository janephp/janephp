<?php

namespace Github\Exception;

class OrgsCheckPublicMembershipForUserNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Response if user is not a public member', 404);
    }
}