<?php

namespace CreditSafe\API\Exception;

class EditPendingFreshInvestigationBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('');
    }
}