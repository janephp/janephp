<?php

namespace Github\Exception;

class ActivityGetRepoSubscriptionNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Response if you don\'t subscribe to the repository');
    }
}