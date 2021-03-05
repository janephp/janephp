<?php

namespace Github\Exception;

class ProjectsMoveCardForbiddenException extends ForbiddenException
{
    private $projectsColumnsCardsCardIdMovesPostResponse403;
    public function __construct(\Github\Model\ProjectsColumnsCardsCardIdMovesPostResponse403 $projectsColumnsCardsCardIdMovesPostResponse403)
    {
        parent::__construct('Forbidden', 403);
        $this->projectsColumnsCardsCardIdMovesPostResponse403 = $projectsColumnsCardsCardIdMovesPostResponse403;
    }
    public function getProjectsColumnsCardsCardIdMovesPostResponse403()
    {
        return $this->projectsColumnsCardsCardIdMovesPostResponse403;
    }
}