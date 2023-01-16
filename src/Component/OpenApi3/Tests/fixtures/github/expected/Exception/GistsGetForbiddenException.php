<?php

namespace Github\Exception;

class GistsGetForbiddenException extends ForbiddenException
{
    /**
     * @var \Github\Model\ResponseForbiddenGist
     */
    private $responseForbiddenGist;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Github\Model\ResponseForbiddenGist $responseForbiddenGist, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Forbidden Gist');
        $this->responseForbiddenGist = $responseForbiddenGist;
        $this->response = $response;
    }
    public function getResponseForbiddenGist() : \Github\Model\ResponseForbiddenGist
    {
        return $this->responseForbiddenGist;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}