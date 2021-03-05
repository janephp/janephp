<?php

namespace Github\Exception;

class GistsCheckIsStarredNotFoundException extends NotFoundException
{
    private $gistsGistIdStarGetResponse404;
    public function __construct(\Github\Model\GistsGistIdStarGetResponse404 $gistsGistIdStarGetResponse404)
    {
        parent::__construct('Response if gist is not starred', 404);
        $this->gistsGistIdStarGetResponse404 = $gistsGistIdStarGetResponse404;
    }
    public function getGistsGistIdStarGetResponse404()
    {
        return $this->gistsGistIdStarGetResponse404;
    }
}