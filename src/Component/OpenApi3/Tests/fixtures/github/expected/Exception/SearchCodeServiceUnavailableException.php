<?php

namespace Github\Exception;

class SearchCodeServiceUnavailableException extends ServiceUnavailableException
{
    /**
     * @var \Github\Model\ResponseServiceUnavailable
     */
    private $responseServiceUnavailable;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Github\Model\ResponseServiceUnavailable $responseServiceUnavailable, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Service Unavailable');
        $this->responseServiceUnavailable = $responseServiceUnavailable;
        $this->response = $response;
    }
    public function getResponseServiceUnavailable() : \Github\Model\ResponseServiceUnavailable
    {
        return $this->responseServiceUnavailable;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}