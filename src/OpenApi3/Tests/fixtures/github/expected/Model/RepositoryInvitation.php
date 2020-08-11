<?php

namespace Github\Model;

class RepositoryInvitation
{
    /**
     * Unique identifier of the repository invitation.
     *
     * @var int
     */
    protected $id;
    /**
     * Minimal Repository
     *
     * @var MinimalRepository
     */
    protected $repository;
    /**
     * 
     *
     * @var RepositoryInvitationInvitee|null
     */
    protected $invitee;
    /**
     * 
     *
     * @var RepositoryInvitationInviter|null
     */
    protected $inviter;
    /**
     * The permission associated with the invitation.
     *
     * @var string
     */
    protected $permissions;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * URL for the repository invitation
     *
     * @var string
     */
    protected $url;
    /**
     * 
     *
     * @var string
     */
    protected $htmlUrl;
    /**
     * 
     *
     * @var string
     */
    protected $nodeId;
    /**
     * Unique identifier of the repository invitation.
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * Unique identifier of the repository invitation.
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
     * Minimal Repository
     *
     * @return MinimalRepository
     */
    public function getRepository() : MinimalRepository
    {
        return $this->repository;
    }
    /**
     * Minimal Repository
     *
     * @param MinimalRepository $repository
     *
     * @return self
     */
    public function setRepository(MinimalRepository $repository) : self
    {
        $this->repository = $repository;
        return $this;
    }
    /**
     * 
     *
     * @return RepositoryInvitationInvitee|null
     */
    public function getInvitee() : ?RepositoryInvitationInvitee
    {
        return $this->invitee;
    }
    /**
     * 
     *
     * @param RepositoryInvitationInvitee|null $invitee
     *
     * @return self
     */
    public function setInvitee(?RepositoryInvitationInvitee $invitee) : self
    {
        $this->invitee = $invitee;
        return $this;
    }
    /**
     * 
     *
     * @return RepositoryInvitationInviter|null
     */
    public function getInviter() : ?RepositoryInvitationInviter
    {
        return $this->inviter;
    }
    /**
     * 
     *
     * @param RepositoryInvitationInviter|null $inviter
     *
     * @return self
     */
    public function setInviter(?RepositoryInvitationInviter $inviter) : self
    {
        $this->inviter = $inviter;
        return $this;
    }
    /**
     * The permission associated with the invitation.
     *
     * @return string
     */
    public function getPermissions() : string
    {
        return $this->permissions;
    }
    /**
     * The permission associated with the invitation.
     *
     * @param string $permissions
     *
     * @return self
     */
    public function setPermissions(string $permissions) : self
    {
        $this->permissions = $permissions;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getCreatedAt() : \DateTime
    {
        return $this->createdAt;
    }
    /**
     * 
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt) : self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * URL for the repository invitation
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * URL for the repository invitation
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url) : self
    {
        $this->url = $url;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getHtmlUrl() : string
    {
        return $this->htmlUrl;
    }
    /**
     * 
     *
     * @param string $htmlUrl
     *
     * @return self
     */
    public function setHtmlUrl(string $htmlUrl) : self
    {
        $this->htmlUrl = $htmlUrl;
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
}