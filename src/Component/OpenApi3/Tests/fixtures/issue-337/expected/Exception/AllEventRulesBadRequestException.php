<?php

namespace CreditSafe\API\Exception;

class AllEventRulesBadRequestException extends BadRequestException
{
    public function __construct(
        /**
         * @var \CreditSafe\API\Model\BadRequestError
         */
        private readonly \CreditSafe\API\Model\BadRequestError $badRequestError,
        /**
         * @var \Psr\Http\Message\ResponseInterface
         */
        private readonly \Psr\Http\Message\ResponseInterface $response
    )
    {
        parent::__construct('Bad Request - specific error information is provided in the `details` field. </br> Most common causes of this response are incorrect, missing or unexpected parameters in the request e.g. missing the `Authorization Header`, invalid search criteria or providing an invalid `connectId` for a report).');
    }
    public function getBadRequestError(): \CreditSafe\API\Model\BadRequestError
    {
        return $this->badRequestError;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}