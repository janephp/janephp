<?php

namespace CreditSafe\API\Exception;

class DeletePendingFreshInvesitgationBadRequestException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('', 400);
    }
}