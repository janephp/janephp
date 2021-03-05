<?php

namespace Github\Exception;

class PullsCheckIfMergedNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Response if pull request has not been merged');
    }
}