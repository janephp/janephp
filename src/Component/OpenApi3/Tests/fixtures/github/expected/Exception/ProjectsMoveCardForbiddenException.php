<?php

namespace Github\Exception;

class ProjectsMoveCardForbiddenException extends ForbiddenException
{
    /**
     * @var \Github\Model\ProjectsColumnsCardsCardIdMovesPostResponse403
     */
    private $projectsColumnsCardsCardIdMovesPostResponse403;
    public function __construct(\Github\Model\ProjectsColumnsCardsCardIdMovesPostResponse403 $projectsColumnsCardsCardIdMovesPostResponse403)
    {
        parent::__construct('Forbidden', 403);
        $this->projectsColumnsCardsCardIdMovesPostResponse403 = $projectsColumnsCardsCardIdMovesPostResponse403;
    }
    public function getProjectsColumnsCardsCardIdMovesPostResponse403() : \Github\Model\ProjectsColumnsCardsCardIdMovesPostResponse403
    {
        return $this->projectsColumnsCardsCardIdMovesPostResponse403;
    }
}