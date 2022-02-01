<?php

namespace Github\Exception;

class TeamsAddMemberLegacyUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \Github\Model\TeamsTeamIdMembersUsernamePutResponse422
     */
    private $teamsTeamIdMembersUsernamePutResponse422;
    public function __construct(\Github\Model\TeamsTeamIdMembersUsernamePutResponse422 $teamsTeamIdMembersUsernamePutResponse422)
    {
        parent::__construct('response');
        $this->teamsTeamIdMembersUsernamePutResponse422 = $teamsTeamIdMembersUsernamePutResponse422;
    }
    public function getTeamsTeamIdMembersUsernamePutResponse422() : \Github\Model\TeamsTeamIdMembersUsernamePutResponse422
    {
        return $this->teamsTeamIdMembersUsernamePutResponse422;
    }
}