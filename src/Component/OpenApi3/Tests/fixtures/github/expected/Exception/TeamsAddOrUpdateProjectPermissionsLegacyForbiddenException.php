<?php

namespace Github\Exception;

class TeamsAddOrUpdateProjectPermissionsLegacyForbiddenException extends ForbiddenException
{
    /**
     * @var \Github\Model\TeamsTeamIdProjectsProjectIdPutResponse403
     */
    private $teamsTeamIdProjectsProjectIdPutResponse403;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Github\Model\TeamsTeamIdProjectsProjectIdPutResponse403 $teamsTeamIdProjectsProjectIdPutResponse403, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Response if the project is not owned by the organization');
        $this->teamsTeamIdProjectsProjectIdPutResponse403 = $teamsTeamIdProjectsProjectIdPutResponse403;
        $this->response = $response;
    }
    public function getTeamsTeamIdProjectsProjectIdPutResponse403() : \Github\Model\TeamsTeamIdProjectsProjectIdPutResponse403
    {
        return $this->teamsTeamIdProjectsProjectIdPutResponse403;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}