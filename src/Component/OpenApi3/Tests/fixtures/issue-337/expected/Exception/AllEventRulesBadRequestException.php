<?php

namespace CreditSafe\API\Exception;

class AllEventRulesBadRequestException extends BadRequestException
{
    /**
     * @var \CreditSafe\API\Model\BadRequestError
     */
    private $badRequestError;
    public function __construct(\CreditSafe\API\Model\BadRequestError $badRequestError)
    {
        parent::__construct('Bad Request - specific error information is provided in the `details` field. </br> Most common causes of this response are incorrect, missing or unexpected parameters in the request e.g. missing the `Authorization Header`, invalid search criteria or providing an invalid `connectId` for a report).');
        $this->badRequestError = $badRequestError;
    }
    public function getBadRequestError() : \CreditSafe\API\Model\BadRequestError
    {
        return $this->badRequestError;
    }
}