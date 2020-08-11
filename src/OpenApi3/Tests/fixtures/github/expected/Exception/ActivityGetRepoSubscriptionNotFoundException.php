<?php

namespace Github\Exception;

class ActivityGetRepoSubscriptionNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Response if you don\'t subscribe to the repository', 404);
    }
}