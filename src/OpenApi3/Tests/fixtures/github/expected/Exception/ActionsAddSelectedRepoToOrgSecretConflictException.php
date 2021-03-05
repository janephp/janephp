<?php

namespace Github\Exception;

class ActionsAddSelectedRepoToOrgSecretConflictException extends ConflictException
{
    public function __construct()
    {
        parent::__construct('Response when visibility type is not set to selected');
    }
}