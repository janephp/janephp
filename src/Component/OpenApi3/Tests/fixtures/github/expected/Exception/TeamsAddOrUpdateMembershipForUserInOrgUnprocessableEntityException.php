<?php

namespace Github\Exception;

class TeamsAddOrUpdateMembershipForUserInOrgUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \Github\Model\OrgsOrgTeamsTeamSlugMembershipsUsernamePutResponse422
     */
    private $orgsOrgTeamsTeamSlugMembershipsUsernamePutResponse422;
    public function __construct(\Github\Model\OrgsOrgTeamsTeamSlugMembershipsUsernamePutResponse422 $orgsOrgTeamsTeamSlugMembershipsUsernamePutResponse422)
    {
        parent::__construct('Response if you attempt to add an organization to a team', 422);
        $this->orgsOrgTeamsTeamSlugMembershipsUsernamePutResponse422 = $orgsOrgTeamsTeamSlugMembershipsUsernamePutResponse422;
    }
    public function getOrgsOrgTeamsTeamSlugMembershipsUsernamePutResponse422() : \Github\Model\OrgsOrgTeamsTeamSlugMembershipsUsernamePutResponse422
    {
        return $this->orgsOrgTeamsTeamSlugMembershipsUsernamePutResponse422;
    }
}