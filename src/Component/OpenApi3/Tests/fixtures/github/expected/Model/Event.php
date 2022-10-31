<?php

namespace Github\Model;

class Event extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
        $this->initialized['id'] = true;
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
        $this->initialized['type'] = true;
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
        $this->initialized['actor'] = true;
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
        $this->initialized['repo'] = true;
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
        $this->initialized['org'] = true;
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
        $this->initialized['payload'] = true;
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
        $this->initialized['public'] = true;
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
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
}