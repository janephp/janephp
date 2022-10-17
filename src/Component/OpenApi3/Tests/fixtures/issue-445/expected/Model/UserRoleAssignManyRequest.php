<?php

namespace PicturePark\API\Model;

class UserRoleAssignManyRequest extends \ArrayObject
{
    /**
     * User IDs.
     *
     * @var string[]
     */
    protected $userIds;
    /**
     * Users roles to modify.
     *
     * @var string[]
     */
    protected $userRoleIds;
    /**
    * Defines how to apply specified UserRoleIds to UserIds
    If an operation results in no change for a user, that user will be returned as succeeded.
    *
    * @var mixed
    */
    protected $operation;
    /**
     * User IDs.
     *
     * @return string[]
     */
    public function getUserIds() : array
    {
        return $this->userIds;
    }
    /**
     * User IDs.
     *
     * @param string[] $userIds
     *
     * @return self
     */
    public function setUserIds(array $userIds) : self
    {
        $this->userIds = $userIds;
        return $this;
    }
    /**
     * Users roles to modify.
     *
     * @return string[]
     */
    public function getUserRoleIds() : array
    {
        return $this->userRoleIds;
    }
    /**
     * Users roles to modify.
     *
     * @param string[] $userRoleIds
     *
     * @return self
     */
    public function setUserRoleIds(array $userRoleIds) : self
    {
        $this->userRoleIds = $userRoleIds;
        return $this;
    }
    /**
    * Defines how to apply specified UserRoleIds to UserIds
    If an operation results in no change for a user, that user will be returned as succeeded.
    *
    * @return mixed
    */
    public function getOperation()
    {
        return $this->operation;
    }
    /**
    * Defines how to apply specified UserRoleIds to UserIds
    If an operation results in no change for a user, that user will be returned as succeeded.
    *
    * @param mixed $operation
    *
    * @return self
    */
    public function setOperation($operation) : self
    {
        $this->operation = $operation;
        return $this;
    }
}