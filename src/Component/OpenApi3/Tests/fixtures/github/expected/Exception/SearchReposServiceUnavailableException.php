<?php

namespace Github\Exception;

class SearchReposServiceUnavailableException extends ServiceUnavailableException
{
    /**
     * @var \Github\Model\ResponseServiceUnavailable
     */
    private $responseServiceUnavailable;
    public function __construct(\Github\Model\ResponseServiceUnavailable $responseServiceUnavailable)
    {
        parent::__construct('Service Unavailable');
        $this->responseServiceUnavailable = $responseServiceUnavailable;
    }
    public function getResponseServiceUnavailable() : \Github\Model\ResponseServiceUnavailable
    {
        return $this->responseServiceUnavailable;
    }
}