<?php

namespace Github\Exception;

class ProjectsMoveCardForbiddenException extends ForbiddenException
{
    /**
     * @var \Github\Model\ProjectsColumnsCardsCardIdMovesPostResponse403
     */
    private $projectsColumnsCardsCardIdMovesPostResponse403;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Github\Model\ProjectsColumnsCardsCardIdMovesPostResponse403 $projectsColumnsCardsCardIdMovesPostResponse403, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Forbidden');
        $this->projectsColumnsCardsCardIdMovesPostResponse403 = $projectsColumnsCardsCardIdMovesPostResponse403;
        $this->response = $response;
    }
    public function getProjectsColumnsCardsCardIdMovesPostResponse403() : \Github\Model\ProjectsColumnsCardsCardIdMovesPostResponse403
    {
        return $this->projectsColumnsCardsCardIdMovesPostResponse403;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}