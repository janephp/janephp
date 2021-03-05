<?php

namespace Github\Exception;

class TeamsAddOrUpdateMembershipForUserLegacyUnprocessableEntityException extends UnprocessableEntityException
{
    private $teamsTeamIdMembershipsUsernamePutResponse422;
    public function __construct(\Github\Model\TeamsTeamIdMembershipsUsernamePutResponse422 $teamsTeamIdMembershipsUsernamePutResponse422)
    {
        parent::__construct('Response if you attempt to add an organization to a team', 422);
        $this->teamsTeamIdMembershipsUsernamePutResponse422 = $teamsTeamIdMembershipsUsernamePutResponse422;
    }
    public function getTeamsTeamIdMembershipsUsernamePutResponse422()
    {
        return $this->teamsTeamIdMembershipsUsernamePutResponse422;
    }
}