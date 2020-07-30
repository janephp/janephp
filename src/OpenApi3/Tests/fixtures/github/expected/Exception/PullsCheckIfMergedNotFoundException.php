<?php

namespace Github\Exception;

class PullsCheckIfMergedNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Response if pull request has not been merged', 404);
    }
}