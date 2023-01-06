<?php

namespace Github\Exception;

class ProjectsMoveCardServiceUnavailableException extends ServiceUnavailableException
{
    /**
     * @var \Github\Model\ProjectsColumnsCardsCardIdMovesPostResponse503
     */
    private $projectsColumnsCardsCardIdMovesPostResponse503;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Github\Model\ProjectsColumnsCardsCardIdMovesPostResponse503 $projectsColumnsCardsCardIdMovesPostResponse503, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Service Unavailable');
        $this->projectsColumnsCardsCardIdMovesPostResponse503 = $projectsColumnsCardsCardIdMovesPostResponse503;
        $this->response = $response;
    }
    public function getProjectsColumnsCardsCardIdMovesPostResponse503() : \Github\Model\ProjectsColumnsCardsCardIdMovesPostResponse503
    {
        return $this->projectsColumnsCardsCardIdMovesPostResponse503;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}