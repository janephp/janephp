<?php

namespace Github\Exception;

class ProjectsUpdateForbiddenException extends ForbiddenException
{
    /**
     * @var \Github\Model\ProjectsProjectIdPatchResponse403
     */
    private $projectsProjectIdPatchResponse403;
    public function __construct(\Github\Model\ProjectsProjectIdPatchResponse403 $projectsProjectIdPatchResponse403)
    {
        parent::__construct('Forbidden');
        $this->projectsProjectIdPatchResponse403 = $projectsProjectIdPatchResponse403;
    }
    public function getProjectsProjectIdPatchResponse403() : \Github\Model\ProjectsProjectIdPatchResponse403
    {
        return $this->projectsProjectIdPatchResponse403;
    }
}