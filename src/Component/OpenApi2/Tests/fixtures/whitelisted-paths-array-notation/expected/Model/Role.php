<?php

namespace Jane\OpenApi2\Tests\Expected\Model;

class Role
{
    /**
     * Unique ID for the role.
     *
     * @var int
     */
    protected $id;
    /**
     * The name of the role.
     *
     * @var string
     */
    protected $name;
    /**
     * The IDs of the users assigned to this role.
     *
     * @var int[]
     */
    protected $userIds;
    /**
     * Date and time the role was created.
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * Date and time the role was last updated.
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * Unique ID for the role.
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * Unique ID for the role.
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
     * The name of the role.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of the role.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * The IDs of the users assigned to this role.
     *
     * @return int[]
     */
    public function getUserIds() : array
    {
        return $this->userIds;
    }
    /**
     * The IDs of the users assigned to this role.
     *
     * @param int[] $userIds
     *
     * @return self
     */
    public function setUserIds(array $userIds) : self
    {
        $this->userIds = $userIds;
        return $this;
    }
    /**
     * Date and time the role was created.
     *
     * @return \DateTime
     */
    public function getCreatedAt() : \DateTime
    {
        return $this->createdAt;
    }
    /**
     * Date and time the role was created.
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
     * Date and time the role was last updated.
     *
     * @return \DateTime
     */
    public function getUpdatedAt() : \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * Date and time the role was last updated.
     *
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt) : self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
}