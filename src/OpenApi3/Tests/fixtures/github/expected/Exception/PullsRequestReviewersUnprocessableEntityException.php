<?php

namespace Github\Exception;

class PullsRequestReviewersUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Response if user is not a collaborator');
    }
}