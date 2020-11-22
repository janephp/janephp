<?php

namespace Github\Exception;

class ActionsAddSelectedRepoToOrgSecretConflictException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Response when visibility type is not set to selected', 409);
    }
}