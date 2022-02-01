<?php

namespace Github\Exception;

class GistsGetForbiddenException extends ForbiddenException
{
    /**
     * @var \Github\Model\ResponseForbiddenGist
     */
    private $responseForbiddenGist;
    public function __construct(\Github\Model\ResponseForbiddenGist $responseForbiddenGist)
    {
        parent::__construct('Forbidden Gist', 403);
        $this->responseForbiddenGist = $responseForbiddenGist;
    }
    public function getResponseForbiddenGist() : \Github\Model\ResponseForbiddenGist
    {
        return $this->responseForbiddenGist;
    }
}