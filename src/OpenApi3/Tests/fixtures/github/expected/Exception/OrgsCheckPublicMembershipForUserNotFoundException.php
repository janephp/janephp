<?php

namespace Github\Exception;

class OrgsCheckPublicMembershipForUserNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Response if user is not a public member');
    }
}