<?php

namespace Github\Exception;

class ProjectsCreateCardServiceUnavailableException extends ServiceUnavailableException
{
    /**
     * @var \Github\Model\ProjectsColumnsColumnIdCardsPostResponse503
     */
    private $projectsColumnsColumnIdCardsPostResponse503;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Github\Model\ProjectsColumnsColumnIdCardsPostResponse503 $projectsColumnsColumnIdCardsPostResponse503, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Service Unavailable');
        $this->projectsColumnsColumnIdCardsPostResponse503 = $projectsColumnsColumnIdCardsPostResponse503;
        $this->response = $response;
    }
    public function getProjectsColumnsColumnIdCardsPostResponse503() : \Github\Model\ProjectsColumnsColumnIdCardsPostResponse503
    {
        return $this->projectsColumnsColumnIdCardsPostResponse503;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}