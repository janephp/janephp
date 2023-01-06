<?php

namespace Github\Exception;

class ProjectsDeleteForbiddenException extends ForbiddenException
{
    /**
     * @var \Github\Model\ProjectsProjectIdDeleteResponse403
     */
    private $projectsProjectIdDeleteResponse403;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Github\Model\ProjectsProjectIdDeleteResponse403 $projectsProjectIdDeleteResponse403, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Forbidden');
        $this->projectsProjectIdDeleteResponse403 = $projectsProjectIdDeleteResponse403;
        $this->response = $response;
    }
    public function getProjectsProjectIdDeleteResponse403() : \Github\Model\ProjectsProjectIdDeleteResponse403
    {
        return $this->projectsProjectIdDeleteResponse403;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}