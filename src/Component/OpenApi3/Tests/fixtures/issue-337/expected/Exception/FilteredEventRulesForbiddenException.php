<?php

namespace CreditSafe\API\Exception;

class FilteredEventRulesForbiddenException extends ForbiddenException
{
    public function __construct(
        /**
         * @var \Symfony\Contracts\HttpClient\ResponseInterface|null
         */
        private readonly ?\Symfony\Contracts\HttpClient\ResponseInterface $response = null
    )
    {
        parent::__construct('This error is returned when your user account does have access to the requested service, or because the service has expired, or has reached its full usage limit. Check `/Access/Countries for a full list of your services.');
    }
    public function getResponse(): ?\Symfony\Contracts\HttpClient\ResponseInterface
    {
        return $this->response;
    }
}