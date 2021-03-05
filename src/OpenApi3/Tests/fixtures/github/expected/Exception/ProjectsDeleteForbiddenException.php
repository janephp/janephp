<?php

namespace Github\Exception;

class ProjectsDeleteForbiddenException extends ForbiddenException
{
    private $projectsProjectIdDeleteResponse403;
    public function __construct(\Github\Model\ProjectsProjectIdDeleteResponse403 $projectsProjectIdDeleteResponse403)
    {
        parent::__construct('Forbidden', 403);
        $this->projectsProjectIdDeleteResponse403 = $projectsProjectIdDeleteResponse403;
    }
    public function getProjectsProjectIdDeleteResponse403()
    {
        return $this->projectsProjectIdDeleteResponse403;
    }
}