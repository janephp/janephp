<?php

namespace Github\Model;

class OrganizationInvitation extends \ArrayObject
{
    /**
     * 
     *
     * @var int
     */
    protected $id;
    /**
     * 
     *
     * @var string|null
     */
    protected $login;
    /**
     * 
     *
     * @var string|null
     */
    protected $email;
    /**
     * 
     *
     * @var string
     */
    protected $role;
    /**
     * 
     *
     * @var string
     */
    protected $createdAt;
    /**
     * Simple User
     *
     * @var SimpleUser|null
     */
    protected $inviter;
    /**
     * 
     *
     * @var int
     */
    protected $teamCount;
    /**
     * 
     *
     * @var string
     */
    protected $invitationTeamUrl;
    /**
     * 
     *
     * @var string
     */
    protected $nodeId;
    /**
     * 
     *
     * @var string
     */
    protected $invitationTeamsUrl;
    /**
     * 
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLogin() : ?string
    {
        return $this->login;
    }
    /**
     * 
     *
     * @param string|null $login
     *
     * @return self
     */
    public function setLogin(?string $login) : self
    {
        $this->login = $login;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getEmail() : ?string
    {
        return $this->email;
    }
    /**
     * 
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setEmail(?string $email) : self
    {
        $this->email = $email;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRole() : string
    {
        return $this->role;
    }
    /**
     * 
     *
     * @param string $role
     *
     * @return self
     */
    public function setRole(string $role) : self
    {
        $this->role = $role;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCreatedAt() : string
    {
        return $this->createdAt;
    }
    /**
     * 
     *
     * @param string $createdAt
     *
     * @return self
     */
    public function setCreatedAt(string $createdAt) : self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Simple User
     *
     * @return SimpleUser|null
     */
    public function getInviter() : ?SimpleUser
    {
        return $this->inviter;
    }
    /**
     * Simple User
     *
     * @param SimpleUser|null $inviter
     *
     * @return self
     */
    public function setInviter(?SimpleUser $inviter) : self
    {
        $this->inviter = $inviter;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTeamCount() : int
    {
        return $this->teamCount;
    }
    /**
     * 
     *
     * @param int $teamCount
     *
     * @return self
     */
    public function setTeamCount(int $teamCount) : self
    {
        $this->teamCount = $teamCount;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getInvitationTeamUrl() : string
    {
        return $this->invitationTeamUrl;
    }
    /**
     * 
     *
     * @param string $invitationTeamUrl
     *
     * @return self
     */
    public function setInvitationTeamUrl(string $invitationTeamUrl) : self
    {
        $this->invitationTeamUrl = $invitationTeamUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNodeId() : string
    {
        return $this->nodeId;
    }
    /**
     * 
     *
     * @param string $nodeId
     *
     * @return self
     */
    public function setNodeId(string $nodeId) : self
    {
        $this->nodeId = $nodeId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getInvitationTeamsUrl() : string
    {
        return $this->invitationTeamsUrl;
    }
    /**
     * 
     *
     * @param string $invitationTeamsUrl
     *
     * @return self
     */
    public function setInvitationTeamsUrl(string $invitationTeamsUrl) : self
    {
        $this->invitationTeamsUrl = $invitationTeamsUrl;
        return $this;
    }
}