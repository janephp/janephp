<?php

namespace PicturePark\API\Model;

class UserUpdateIdentityProviderManyRequest extends \ArrayObject
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
     * User IDs.
     *
     * @var list<string>
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
     * @return list<string>
     */
    public function getUserIds() : array
    {
        return $this->userIds;
    }
    /**
     * User IDs.
     *
     * @param list<string> $userIds
     *
     * @return self
     */
    public function setUserIds(array $userIds) : self
    {
        $this->initialized['userIds'] = true;
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
        $this->initialized['identityProviderId'] = true;
        $this->identityProviderId = $identityProviderId;
        return $this;
    }
}