<?php

namespace PicturePark\API\Model;

class UserReinviteManyRequest extends \ArrayObject
{
    /**
     * User IDs.
     *
     * @var string[]
     */
    protected $userIds;
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
}