<?php

namespace Github\Exception;

class GistsCheckIsStarredNotFoundException extends NotFoundException
{
    /**
     * @var \Github\Model\GistsGistIdStarGetResponse404
     */
    private $gistsGistIdStarGetResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Github\Model\GistsGistIdStarGetResponse404 $gistsGistIdStarGetResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Response if gist is not starred');
        $this->gistsGistIdStarGetResponse404 = $gistsGistIdStarGetResponse404;
        $this->response = $response;
    }
    public function getGistsGistIdStarGetResponse404() : \Github\Model\GistsGistIdStarGetResponse404
    {
        return $this->gistsGistIdStarGetResponse404;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}