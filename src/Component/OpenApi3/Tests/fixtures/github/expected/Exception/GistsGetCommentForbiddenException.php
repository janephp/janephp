<?php

namespace Github\Exception;

class GistsGetCommentForbiddenException extends ForbiddenException
{
    /**
     * @var \Github\Model\ResponseForbiddenGist
     */
    private $responseForbiddenGist;
    public function __construct(\Github\Model\ResponseForbiddenGist $responseForbiddenGist)
    {
        parent::__construct('Forbidden Gist');
        $this->responseForbiddenGist = $responseForbiddenGist;
    }
    public function getResponseForbiddenGist() : \Github\Model\ResponseForbiddenGist
    {
        return $this->responseForbiddenGist;
    }
}