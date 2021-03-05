<?php

namespace CreditSafe\API\Exception;

class EditPendingFreshInvestigationNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('');
    }
}