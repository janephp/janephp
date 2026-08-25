<?php

namespace Github\Model;

use Github\Runtime\AdditionalAndPatternProperties;
use Github\Runtime\AdditionalPropertiesInterface;
class ProtectedBranchRequiredPullRequestReviewsDismissalRestrictions implements AdditionalPropertiesInterface
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
     * @var string
     */
    protected $url;
    /**
     * @var string
     */
    protected $usersUrl;
    /**
     * @var string
     */
    protected $teamsUrl;
    /**
     * @var list<SimpleUser>
     */
    protected $users;
    /**
     * @var list<Team>
     */
    protected $teams;
    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }
    /**
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
    /**
     * @return string
     */
    public function getUsersUrl(): string
    {
        return $this->usersUrl;
    }
    /**
     * @param string $usersUrl
     *
     * @return self
     */
    public function setUsersUrl(string $usersUrl): self
    {
        $this->initialized['usersUrl'] = true;
        $this->usersUrl = $usersUrl;
        return $this;
    }
    /**
     * @return string
     */
    public function getTeamsUrl(): string
    {
        return $this->teamsUrl;
    }
    /**
     * @param string $teamsUrl
     *
     * @return self
     */
    public function setTeamsUrl(string $teamsUrl): self
    {
        $this->initialized['teamsUrl'] = true;
        $this->teamsUrl = $teamsUrl;
        return $this;
    }
    /**
     * @return list<SimpleUser>
     */
    public function getUsers(): array
    {
        return $this->users;
    }
    /**
     * @param list<SimpleUser> $users
     *
     * @return self
     */
    public function setUsers(array $users): self
    {
        $this->initialized['users'] = true;
        $this->users = $users;
        return $this;
    }
    /**
     * @return list<Team>
     */
    public function getTeams(): array
    {
        return $this->teams;
    }
    /**
     * @param list<Team> $teams
     *
     * @return self
     */
    public function setTeams(array $teams): self
    {
        $this->initialized['teams'] = true;
        $this->teams = $teams;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['url' => ['url', 'getUrl', 'setUrl'], 'usersUrl' => ['users_url', 'getUsersUrl', 'setUsersUrl'], 'teamsUrl' => ['teams_url', 'getTeamsUrl', 'setTeamsUrl'], 'users' => ['users', 'getUsers', 'setUsers'], 'teams' => ['teams', 'getTeams', 'setTeams']];
    }
}