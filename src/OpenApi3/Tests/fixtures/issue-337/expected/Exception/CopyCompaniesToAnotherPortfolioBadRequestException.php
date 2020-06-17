<?php

namespace CreditSafe\API\Exception;

class CopyCompaniesToAnotherPortfolioBadRequestException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('', 400);
    }
}