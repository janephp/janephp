<?php

namespace CreditSafe\API\Exception;

class RetrievePortfolioByIdNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('', 404);
    }
}