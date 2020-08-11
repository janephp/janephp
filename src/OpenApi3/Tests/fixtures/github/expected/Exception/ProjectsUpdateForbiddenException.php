<?php

namespace Github\Exception;

class ProjectsUpdateForbiddenException extends \RuntimeException implements ClientException
{
    private $projectsProjectIdPatchResponse403;
    public function __construct(\Github\Model\ProjectsProjectIdPatchResponse403 $projectsProjectIdPatchResponse403)
    {
        parent::__construct('Forbidden', 403);
        $this->projectsProjectIdPatchResponse403 = $projectsProjectIdPatchResponse403;
    }
    public function getProjectsProjectIdPatchResponse403()
    {
        return $this->projectsProjectIdPatchResponse403;
    }
}