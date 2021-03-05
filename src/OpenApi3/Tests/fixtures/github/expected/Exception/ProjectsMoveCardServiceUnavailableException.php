<?php

namespace Github\Exception;

class ProjectsMoveCardServiceUnavailableException extends ServiceUnavailableException
{
    private $projectsColumnsCardsCardIdMovesPostResponse503;
    public function __construct(\Github\Model\ProjectsColumnsCardsCardIdMovesPostResponse503 $projectsColumnsCardsCardIdMovesPostResponse503)
    {
        parent::__construct('Service Unavailable', 503);
        $this->projectsColumnsCardsCardIdMovesPostResponse503 = $projectsColumnsCardsCardIdMovesPostResponse503;
    }
    public function getProjectsColumnsCardsCardIdMovesPostResponse503()
    {
        return $this->projectsColumnsCardsCardIdMovesPostResponse503;
    }
}