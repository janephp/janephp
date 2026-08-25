<?php

namespace Github\Model;

use Github\Runtime\AdditionalAndPatternProperties;
use Github\Runtime\AdditionalPropertiesInterface;
class OrgsOrgTeamsTeamSlugTeamSyncGroupMappingsPatchBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The IdP groups you want to connect to a GitHub team. When updating, the new `groups` object will replace the original one. You must include any existing groups that you don't want to remove.
     *
     * @var list<OrgsOrgTeamsTeamSlugTeamSyncGroupMappingsPatchBodyGroupsItem>
     */
    protected $groups;
    /**
     * The IdP groups you want to connect to a GitHub team. When updating, the new `groups` object will replace the original one. You must include any existing groups that you don't want to remove.
     *
     * @return list<OrgsOrgTeamsTeamSlugTeamSyncGroupMappingsPatchBodyGroupsItem>
     */
    public function getGroups(): array
    {
        return $this->groups;
    }
    /**
     * The IdP groups you want to connect to a GitHub team. When updating, the new `groups` object will replace the original one. You must include any existing groups that you don't want to remove.
     *
     * @param list<OrgsOrgTeamsTeamSlugTeamSyncGroupMappingsPatchBodyGroupsItem> $groups
     *
     * @return self
     */
    public function setGroups(array $groups): self
    {
        $this->initialized['groups'] = true;
        $this->groups = $groups;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['groups' => ['groups', 'getGroups', 'setGroups']];
    }
}