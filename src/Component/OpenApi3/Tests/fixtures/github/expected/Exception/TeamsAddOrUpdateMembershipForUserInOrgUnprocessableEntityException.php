<?php

namespace Github\Exception;

class TeamsAddOrUpdateMembershipForUserInOrgUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \Github\Model\OrgsOrgTeamsTeamSlugMembershipsUsernamePutResponse422
     */
    private $orgsOrgTeamsTeamSlugMembershipsUsernamePutResponse422;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Github\Model\OrgsOrgTeamsTeamSlugMembershipsUsernamePutResponse422 $orgsOrgTeamsTeamSlugMembershipsUsernamePutResponse422, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Response if you attempt to add an organization to a team');
        $this->orgsOrgTeamsTeamSlugMembershipsUsernamePutResponse422 = $orgsOrgTeamsTeamSlugMembershipsUsernamePutResponse422;
        $this->response = $response;
    }
    public function getOrgsOrgTeamsTeamSlugMembershipsUsernamePutResponse422() : \Github\Model\OrgsOrgTeamsTeamSlugMembershipsUsernamePutResponse422
    {
        return $this->orgsOrgTeamsTeamSlugMembershipsUsernamePutResponse422;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}