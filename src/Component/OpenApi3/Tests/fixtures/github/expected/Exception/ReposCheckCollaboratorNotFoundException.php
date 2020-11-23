<?php

namespace Github\Exception;

class ReposCheckCollaboratorNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Response if user is not a collaborator', 404);
    }
}