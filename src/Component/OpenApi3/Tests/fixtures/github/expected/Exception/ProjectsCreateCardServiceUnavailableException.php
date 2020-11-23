<?php

namespace Github\Exception;

class ProjectsCreateCardServiceUnavailableException extends \RuntimeException implements ServerException
{
    private $projectsColumnsColumnIdCardsPostResponse503;
    public function __construct(\Github\Model\ProjectsColumnsColumnIdCardsPostResponse503 $projectsColumnsColumnIdCardsPostResponse503)
    {
        parent::__construct('Service Unavailable', 503);
        $this->projectsColumnsColumnIdCardsPostResponse503 = $projectsColumnsColumnIdCardsPostResponse503;
    }
    public function getProjectsColumnsColumnIdCardsPostResponse503()
    {
        return $this->projectsColumnsColumnIdCardsPostResponse503;
    }
}