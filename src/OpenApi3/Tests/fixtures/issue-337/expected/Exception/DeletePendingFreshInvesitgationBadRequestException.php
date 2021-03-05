<?php

namespace CreditSafe\API\Exception;

class DeletePendingFreshInvesitgationBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('');
    }
}