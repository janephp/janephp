<?php

namespace PicturePark\API\Model;

class OwnerToken
{
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
        $this->userId = $userId;
        return $this;
    }
}