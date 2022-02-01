<?php

namespace Github\Exception;

class TeamsAddOrUpdateMembershipForUserLegacyUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \Github\Model\TeamsTeamIdMembershipsUsernamePutResponse422
     */
    private $teamsTeamIdMembershipsUsernamePutResponse422;
    public function __construct(\Github\Model\TeamsTeamIdMembershipsUsernamePutResponse422 $teamsTeamIdMembershipsUsernamePutResponse422)
    {
        parent::__construct('Response if you attempt to add an organization to a team');
        $this->teamsTeamIdMembershipsUsernamePutResponse422 = $teamsTeamIdMembershipsUsernamePutResponse422;
    }
    public function getTeamsTeamIdMembershipsUsernamePutResponse422() : \Github\Model\TeamsTeamIdMembershipsUsernamePutResponse422
    {
        return $this->teamsTeamIdMembershipsUsernamePutResponse422;
    }
}