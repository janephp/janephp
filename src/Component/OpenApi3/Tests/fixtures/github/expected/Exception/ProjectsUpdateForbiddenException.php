<?php

namespace Github\Exception;

class ProjectsUpdateForbiddenException extends ForbiddenException
{
    /**
     * @var \Github\Model\ProjectsProjectIdPatchResponse403
     */
    private $projectsProjectIdPatchResponse403;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Github\Model\ProjectsProjectIdPatchResponse403 $projectsProjectIdPatchResponse403, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Forbidden');
        $this->projectsProjectIdPatchResponse403 = $projectsProjectIdPatchResponse403;
        $this->response = $response;
    }
    public function getProjectsProjectIdPatchResponse403() : \Github\Model\ProjectsProjectIdPatchResponse403
    {
        return $this->projectsProjectIdPatchResponse403;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}