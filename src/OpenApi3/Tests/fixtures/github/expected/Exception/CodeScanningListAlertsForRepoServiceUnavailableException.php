<?php

namespace Github\Exception;

class CodeScanningListAlertsForRepoServiceUnavailableException extends ServiceUnavailableException
{
    private $responseServiceUnavailable;
    public function __construct(\Github\Model\ResponseServiceUnavailable $responseServiceUnavailable)
    {
        parent::__construct('Service Unavailable', 503);
        $this->responseServiceUnavailable = $responseServiceUnavailable;
    }
    public function getResponseServiceUnavailable()
    {
        return $this->responseServiceUnavailable;
    }
}