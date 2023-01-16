<?php

namespace CreditSafe\API\Exception;

class FilteredEventRulesBadRequestException extends BadRequestException
{
    /**
     * @var \CreditSafe\API\Model\BadRequestError
     */
    private $badRequestError;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\CreditSafe\API\Model\BadRequestError $badRequestError, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request - specific error information is provided in the `details` field. </br> Most common causes of this response are incorrect, missing or unexpected parameters in the request e.g. missing the `Authorization Header`, invalid search criteria or providing an invalid `connectId` for a report).');
        $this->badRequestError = $badRequestError;
        $this->response = $response;
    }
    public function getBadRequestError() : \CreditSafe\API\Model\BadRequestError
    {
        return $this->badRequestError;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}