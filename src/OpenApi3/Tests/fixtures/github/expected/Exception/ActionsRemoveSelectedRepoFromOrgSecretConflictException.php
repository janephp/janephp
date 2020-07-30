<?php

namespace Github\Exception;

class ActionsRemoveSelectedRepoFromOrgSecretConflictException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Response when visibility type not set to selected', 409);
    }
}