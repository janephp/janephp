<?php

namespace Github\Model;

class Event
{
    /**
     * 
     *
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var string|null
     */
    protected $type;
    /**
     * Actor
     *
     * @var Actor
     */
    protected $actor;
    /**
     * 
     *
     * @var EventRepo
     */
    protected $repo;
    /**
     * Actor
     *
     * @var Actor
     */
    protected $org;
    /**
     * 
     *
     * @var EventPayload
     */
    protected $payload;
    /**
     * 
     *
     * @var bool
     */
    protected $public;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * 
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * Actor
     *
     * @return Actor
     */
    public function getActor() : Actor
    {
        return $this->actor;
    }
    /**
     * Actor
     *
     * @param Actor $actor
     *
     * @return self
     */
    public function setActor(Actor $actor) : self
    {
        $this->actor = $actor;
        return $this;
    }
    /**
     * 
     *
     * @return EventRepo
     */
    public function getRepo() : EventRepo
    {
        return $this->repo;
    }
    /**
     * 
     *
     * @param EventRepo $repo
     *
     * @return self
     */
    public function setRepo(EventRepo $repo) : self
    {
        $this->repo = $repo;
        return $this;
    }
    /**
     * Actor
     *
     * @return Actor
     */
    public function getOrg() : Actor
    {
        return $this->org;
    }
    /**
     * Actor
     *
     * @param Actor $org
     *
     * @return self
     */
    public function setOrg(Actor $org) : self
    {
        $this->org = $org;
        return $this;
    }
    /**
     * 
     *
     * @return EventPayload
     */
    public function getPayload() : EventPayload
    {
        return $this->payload;
    }
    /**
     * 
     *
     * @param EventPayload $payload
     *
     * @return self
     */
    public function setPayload(EventPayload $payload) : self
    {
        $this->payload = $payload;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getPublic() : bool
    {
        return $this->public;
    }
    /**
     * 
     *
     * @param bool $public
     *
     * @return self
     */
    public function setPublic(bool $public) : self
    {
        $this->public = $public;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getCreatedAt() : ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * 
     *
     * @param \DateTime|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?\DateTime $createdAt) : self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
}