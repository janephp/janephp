<?php

namespace Github\Model;

class FeedLinks extends \ArrayObject
{
    /**
     * Hypermedia Link with Type
     *
     * @var LinkWithType
     */
    protected $timeline;
    /**
     * Hypermedia Link with Type
     *
     * @var LinkWithType
     */
    protected $user;
    /**
     * Hypermedia Link with Type
     *
     * @var LinkWithType
     */
    protected $securityAdvisories;
    /**
     * Hypermedia Link with Type
     *
     * @var LinkWithType
     */
    protected $currentUser;
    /**
     * Hypermedia Link with Type
     *
     * @var LinkWithType
     */
    protected $currentUserPublic;
    /**
     * Hypermedia Link with Type
     *
     * @var LinkWithType
     */
    protected $currentUserActor;
    /**
     * Hypermedia Link with Type
     *
     * @var LinkWithType
     */
    protected $currentUserOrganization;
    /**
     * 
     *
     * @var LinkWithType[]
     */
    protected $currentUserOrganizations;
    /**
     * Hypermedia Link with Type
     *
     * @return LinkWithType
     */
    public function getTimeline() : LinkWithType
    {
        return $this->timeline;
    }
    /**
     * Hypermedia Link with Type
     *
     * @param LinkWithType $timeline
     *
     * @return self
     */
    public function setTimeline(LinkWithType $timeline) : self
    {
        $this->timeline = $timeline;
        return $this;
    }
    /**
     * Hypermedia Link with Type
     *
     * @return LinkWithType
     */
    public function getUser() : LinkWithType
    {
        return $this->user;
    }
    /**
     * Hypermedia Link with Type
     *
     * @param LinkWithType $user
     *
     * @return self
     */
    public function setUser(LinkWithType $user) : self
    {
        $this->user = $user;
        return $this;
    }
    /**
     * Hypermedia Link with Type
     *
     * @return LinkWithType
     */
    public function getSecurityAdvisories() : LinkWithType
    {
        return $this->securityAdvisories;
    }
    /**
     * Hypermedia Link with Type
     *
     * @param LinkWithType $securityAdvisories
     *
     * @return self
     */
    public function setSecurityAdvisories(LinkWithType $securityAdvisories) : self
    {
        $this->securityAdvisories = $securityAdvisories;
        return $this;
    }
    /**
     * Hypermedia Link with Type
     *
     * @return LinkWithType
     */
    public function getCurrentUser() : LinkWithType
    {
        return $this->currentUser;
    }
    /**
     * Hypermedia Link with Type
     *
     * @param LinkWithType $currentUser
     *
     * @return self
     */
    public function setCurrentUser(LinkWithType $currentUser) : self
    {
        $this->currentUser = $currentUser;
        return $this;
    }
    /**
     * Hypermedia Link with Type
     *
     * @return LinkWithType
     */
    public function getCurrentUserPublic() : LinkWithType
    {
        return $this->currentUserPublic;
    }
    /**
     * Hypermedia Link with Type
     *
     * @param LinkWithType $currentUserPublic
     *
     * @return self
     */
    public function setCurrentUserPublic(LinkWithType $currentUserPublic) : self
    {
        $this->currentUserPublic = $currentUserPublic;
        return $this;
    }
    /**
     * Hypermedia Link with Type
     *
     * @return LinkWithType
     */
    public function getCurrentUserActor() : LinkWithType
    {
        return $this->currentUserActor;
    }
    /**
     * Hypermedia Link with Type
     *
     * @param LinkWithType $currentUserActor
     *
     * @return self
     */
    public function setCurrentUserActor(LinkWithType $currentUserActor) : self
    {
        $this->currentUserActor = $currentUserActor;
        return $this;
    }
    /**
     * Hypermedia Link with Type
     *
     * @return LinkWithType
     */
    public function getCurrentUserOrganization() : LinkWithType
    {
        return $this->currentUserOrganization;
    }
    /**
     * Hypermedia Link with Type
     *
     * @param LinkWithType $currentUserOrganization
     *
     * @return self
     */
    public function setCurrentUserOrganization(LinkWithType $currentUserOrganization) : self
    {
        $this->currentUserOrganization = $currentUserOrganization;
        return $this;
    }
    /**
     * 
     *
     * @return LinkWithType[]
     */
    public function getCurrentUserOrganizations() : array
    {
        return $this->currentUserOrganizations;
    }
    /**
     * 
     *
     * @param LinkWithType[] $currentUserOrganizations
     *
     * @return self
     */
    public function setCurrentUserOrganizations(array $currentUserOrganizations) : self
    {
        $this->currentUserOrganizations = $currentUserOrganizations;
        return $this;
    }
}