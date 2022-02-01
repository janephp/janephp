<?php

namespace Github\Exception;

class ProjectsDeleteForbiddenException extends ForbiddenException
{
    /**
     * @var \Github\Model\ProjectsProjectIdDeleteResponse403
     */
    private $projectsProjectIdDeleteResponse403;
    public function __construct(\Github\Model\ProjectsProjectIdDeleteResponse403 $projectsProjectIdDeleteResponse403)
    {
        parent::__construct('Forbidden', 403);
        $this->projectsProjectIdDeleteResponse403 = $projectsProjectIdDeleteResponse403;
    }
    public function getProjectsProjectIdDeleteResponse403() : \Github\Model\ProjectsProjectIdDeleteResponse403
    {
        return $this->projectsProjectIdDeleteResponse403;
    }
}