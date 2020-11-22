<?php

namespace CreditSafe\API\Exception;

class EditPendingFreshInvestigationNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('', 404);
    }
}