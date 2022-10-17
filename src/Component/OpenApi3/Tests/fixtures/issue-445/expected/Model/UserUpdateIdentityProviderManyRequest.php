<?php

namespace PicturePark\API\Model;

class UserUpdateIdentityProviderManyRequest extends \ArrayObject
{
    /**
     * User IDs.
     *
     * @var string[]
     */
    protected $userIds;
    /**
     * Identity provider to assign to users.
     *
     * @var string
     */
    protected $identityProviderId;
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
     * Identity provider to assign to users.
     *
     * @return string
     */
    public function getIdentityProviderId() : string
    {
        return $this->identityProviderId;
    }
    /**
     * Identity provider to assign to users.
     *
     * @param string $identityProviderId
     *
     * @return self
     */
    public function setIdentityProviderId(string $identityProviderId) : self
    {
        $this->identityProviderId = $identityProviderId;
        return $this;
    }
}