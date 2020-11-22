<?php

namespace Github\Exception;

class PullsRequestReviewersUnprocessableEntityException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Response if user is not a collaborator', 422);
    }
}