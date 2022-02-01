<?php

namespace Github\Exception;

class ProjectsCreateCardServiceUnavailableException extends ServiceUnavailableException
{
    /**
     * @var \Github\Model\ProjectsColumnsColumnIdCardsPostResponse503
     */
    private $projectsColumnsColumnIdCardsPostResponse503;
    public function __construct(\Github\Model\ProjectsColumnsColumnIdCardsPostResponse503 $projectsColumnsColumnIdCardsPostResponse503)
    {
        parent::__construct('Service Unavailable');
        $this->projectsColumnsColumnIdCardsPostResponse503 = $projectsColumnsColumnIdCardsPostResponse503;
    }
    public function getProjectsColumnsColumnIdCardsPostResponse503() : \Github\Model\ProjectsColumnsColumnIdCardsPostResponse503
    {
        return $this->projectsColumnsColumnIdCardsPostResponse503;
    }
}