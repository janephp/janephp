<?php

namespace Github\Exception;

class TeamsAddOrUpdateProjectPermissionsInOrgForbiddenException extends ForbiddenException
{
    /**
     * @var \Github\Model\OrgsOrgTeamsTeamSlugProjectsProjectIdPutResponse403
     */
    private $orgsOrgTeamsTeamSlugProjectsProjectIdPutResponse403;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Github\Model\OrgsOrgTeamsTeamSlugProjectsProjectIdPutResponse403 $orgsOrgTeamsTeamSlugProjectsProjectIdPutResponse403, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Response if the project is not owned by the organization');
        $this->orgsOrgTeamsTeamSlugProjectsProjectIdPutResponse403 = $orgsOrgTeamsTeamSlugProjectsProjectIdPutResponse403;
        $this->response = $response;
    }
    public function getOrgsOrgTeamsTeamSlugProjectsProjectIdPutResponse403() : \Github\Model\OrgsOrgTeamsTeamSlugProjectsProjectIdPutResponse403
    {
        return $this->orgsOrgTeamsTeamSlugProjectsProjectIdPutResponse403;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}