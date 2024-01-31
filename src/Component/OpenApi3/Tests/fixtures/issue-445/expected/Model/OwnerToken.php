<?php

namespace PicturePark\API\Model;

class OwnerToken
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The ownertoken id.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The id of the user to whom this ownertoken currently belongs to.
     *
     * @var string|null
     */
    protected $userId;
    /**
     * The ownertoken id.
     *
     * @return string|null
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * The ownertoken id.
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * The id of the user to whom this ownertoken currently belongs to.
     *
     * @return string|null
     */
    public function getUserId() : ?string
    {
        return $this->userId;
    }
    /**
     * The id of the user to whom this ownertoken currently belongs to.
     *
     * @param string|null $userId
     *
     * @return self
     */
    public function setUserId(?string $userId) : self
    {
        $this->initialized['userId'] = true;
        $this->userId = $userId;
        return $this;
    }
}