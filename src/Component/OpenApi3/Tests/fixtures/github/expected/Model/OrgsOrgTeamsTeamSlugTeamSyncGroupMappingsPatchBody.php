<?php

namespace Github\Model;

class OrgsOrgTeamsTeamSlugTeamSyncGroupMappingsPatchBody extends \ArrayObject
{
    /**
     * The IdP groups you want to connect to a GitHub team. When updating, the new `groups` object will replace the original one. You must include any existing groups that you don't want to remove.
     *
     * @var OrgsOrgTeamsTeamSlugTeamSyncGroupMappingsPatchBodyGroupsItem[]
     */
    protected $groups;
    /**
     * The IdP groups you want to connect to a GitHub team. When updating, the new `groups` object will replace the original one. You must include any existing groups that you don't want to remove.
     *
     * @return OrgsOrgTeamsTeamSlugTeamSyncGroupMappingsPatchBodyGroupsItem[]
     */
    public function getGroups() : array
    {
        return $this->groups;
    }
    /**
     * The IdP groups you want to connect to a GitHub team. When updating, the new `groups` object will replace the original one. You must include any existing groups that you don't want to remove.
     *
     * @param OrgsOrgTeamsTeamSlugTeamSyncGroupMappingsPatchBodyGroupsItem[] $groups
     *
     * @return self
     */
    public function setGroups(array $groups) : self
    {
        $this->groups = $groups;
        return $this;
    }
}