<?php

namespace CreditSafe\API\Exception;

class CompanyEventsForbiddenException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('This error is returned when your user account does have access to the requested service, or because the service has expired, or has reached its full usage limit. Check `/Access/Countries for a full list of your services.', 403);
    }
}