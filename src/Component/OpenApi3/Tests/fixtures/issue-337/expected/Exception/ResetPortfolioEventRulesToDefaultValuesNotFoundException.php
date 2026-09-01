<?php

namespace CreditSafe\API\Exception;

class ResetPortfolioEventRulesToDefaultValuesNotFoundException extends NotFoundException
{
    public function __construct(
        /**
         * @var \Symfony\Contracts\HttpClient\ResponseInterface|null
         */
        private readonly ?\Symfony\Contracts\HttpClient\ResponseInterface $response = null
    )
    {
        parent::__construct('Not Found');
    }
    public function getResponse(): ?\Symfony\Contracts\HttpClient\ResponseInterface
    {
        return $this->response;
    }
}