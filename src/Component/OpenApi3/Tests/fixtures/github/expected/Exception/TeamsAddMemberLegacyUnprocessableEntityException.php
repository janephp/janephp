<?php

namespace Github\Exception;

class TeamsAddMemberLegacyUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \Github\Model\TeamsTeamIdMembersUsernamePutResponse422
     */
    private $teamsTeamIdMembersUsernamePutResponse422;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Github\Model\TeamsTeamIdMembersUsernamePutResponse422 $teamsTeamIdMembersUsernamePutResponse422, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('response');
        $this->teamsTeamIdMembersUsernamePutResponse422 = $teamsTeamIdMembersUsernamePutResponse422;
        $this->response = $response;
    }
    public function getTeamsTeamIdMembersUsernamePutResponse422() : \Github\Model\TeamsTeamIdMembersUsernamePutResponse422
    {
        return $this->teamsTeamIdMembersUsernamePutResponse422;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}