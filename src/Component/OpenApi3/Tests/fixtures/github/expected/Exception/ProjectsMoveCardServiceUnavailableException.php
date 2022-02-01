<?php

namespace Github\Exception;

class ProjectsMoveCardServiceUnavailableException extends ServiceUnavailableException
{
    /**
     * @var \Github\Model\ProjectsColumnsCardsCardIdMovesPostResponse503
     */
    private $projectsColumnsCardsCardIdMovesPostResponse503;
    public function __construct(\Github\Model\ProjectsColumnsCardsCardIdMovesPostResponse503 $projectsColumnsCardsCardIdMovesPostResponse503)
    {
        parent::__construct('Service Unavailable');
        $this->projectsColumnsCardsCardIdMovesPostResponse503 = $projectsColumnsCardsCardIdMovesPostResponse503;
    }
    public function getProjectsColumnsCardsCardIdMovesPostResponse503() : \Github\Model\ProjectsColumnsCardsCardIdMovesPostResponse503
    {
        return $this->projectsColumnsCardsCardIdMovesPostResponse503;
    }
}