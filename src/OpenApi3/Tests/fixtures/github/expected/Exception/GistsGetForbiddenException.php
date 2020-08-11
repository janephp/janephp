<?php

namespace Github\Exception;

class GistsGetForbiddenException extends \RuntimeException implements ClientException
{
    private $responseForbiddenGist;
    public function __construct(\Github\Model\ResponseForbiddenGist $responseForbiddenGist)
    {
        parent::__construct('Forbidden Gist', 403);
        $this->responseForbiddenGist = $responseForbiddenGist;
    }
    public function getResponseForbiddenGist()
    {
        return $this->responseForbiddenGist;
    }
}