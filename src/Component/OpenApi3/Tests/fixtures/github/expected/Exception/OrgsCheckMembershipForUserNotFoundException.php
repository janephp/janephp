<?php

namespace Github\Exception;

class OrgsCheckMembershipForUserNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Response if requester is an organization member and user is not a member', 404);
    }
}