<?php

namespace CreditSafe\API\Exception;

class ListFilteredCompaniesInAPortfolioForbiddenException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('', 403);
    }
}