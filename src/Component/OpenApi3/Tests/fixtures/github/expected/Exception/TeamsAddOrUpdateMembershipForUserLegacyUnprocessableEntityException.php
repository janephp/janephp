<?php

namespace Github\Exception;

class TeamsAddOrUpdateMembershipForUserLegacyUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \Github\Model\TeamsTeamIdMembershipsUsernamePutResponse422
     */
    private $teamsTeamIdMembershipsUsernamePutResponse422;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Github\Model\TeamsTeamIdMembershipsUsernamePutResponse422 $teamsTeamIdMembershipsUsernamePutResponse422, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Response if you attempt to add an organization to a team');
        $this->teamsTeamIdMembershipsUsernamePutResponse422 = $teamsTeamIdMembershipsUsernamePutResponse422;
        $this->response = $response;
    }
    public function getTeamsTeamIdMembershipsUsernamePutResponse422() : \Github\Model\TeamsTeamIdMembershipsUsernamePutResponse422
    {
        return $this->teamsTeamIdMembershipsUsernamePutResponse422;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}