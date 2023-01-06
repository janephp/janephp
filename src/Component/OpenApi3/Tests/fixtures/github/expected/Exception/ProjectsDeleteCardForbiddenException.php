<?php

namespace Github\Exception;

class ProjectsDeleteCardForbiddenException extends ForbiddenException
{
    /**
     * @var \Github\Model\ProjectsColumnsCardsCardIdDeleteResponse403
     */
    private $projectsColumnsCardsCardIdDeleteResponse403;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Github\Model\ProjectsColumnsCardsCardIdDeleteResponse403 $projectsColumnsCardsCardIdDeleteResponse403, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Forbidden');
        $this->projectsColumnsCardsCardIdDeleteResponse403 = $projectsColumnsCardsCardIdDeleteResponse403;
        $this->response = $response;
    }
    public function getProjectsColumnsCardsCardIdDeleteResponse403() : \Github\Model\ProjectsColumnsCardsCardIdDeleteResponse403
    {
        return $this->projectsColumnsCardsCardIdDeleteResponse403;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}