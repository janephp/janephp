<?php

namespace CreditSafe\API\Exception;

class DeleteMonitoringPortfoliosByPortfolioIdCompanyByIdForbiddenException extends ForbiddenException
{
    public function __construct(
        /**
         * @var \Psr\Http\Message\ResponseInterface|null
         */
        private readonly ?\Psr\Http\Message\ResponseInterface $response = null
    )
    {
        parent::__construct('Forbidden');
    }
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}