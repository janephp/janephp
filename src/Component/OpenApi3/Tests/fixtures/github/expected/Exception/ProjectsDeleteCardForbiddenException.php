<?php

namespace Github\Exception;

class ProjectsDeleteCardForbiddenException extends \RuntimeException implements ClientException
{
    private $projectsColumnsCardsCardIdDeleteResponse403;
    public function __construct(\Github\Model\ProjectsColumnsCardsCardIdDeleteResponse403 $projectsColumnsCardsCardIdDeleteResponse403)
    {
        parent::__construct('Forbidden', 403);
        $this->projectsColumnsCardsCardIdDeleteResponse403 = $projectsColumnsCardsCardIdDeleteResponse403;
    }
    public function getProjectsColumnsCardsCardIdDeleteResponse403()
    {
        return $this->projectsColumnsCardsCardIdDeleteResponse403;
    }
}