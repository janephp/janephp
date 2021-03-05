<?php

namespace Github\Exception;

class ReposCheckCollaboratorNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Response if user is not a collaborator');
    }
}