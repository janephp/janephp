<?php

namespace CreditSafe\API\Exception;

class ListPortfolioEventRulesForbiddenException extends ForbiddenException
{
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct('This error is returned when your user account does have access to the requested service, or because the service has expired, or has reached its full usage limit. Check `/Access/Countries for a full list of your services.');
        $this->response = $response;
    }
    public function getResponse() : ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}