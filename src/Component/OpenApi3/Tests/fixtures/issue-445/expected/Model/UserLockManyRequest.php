<?php

namespace PicturePark\API\Model;

class UserLockManyRequest extends \ArrayObject
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
    * Indicates the requested lock state of the users.
    If _true_ was specified, the users will be _locked_. _False_ will unlock the previously _locked_ users.
    Users which are already in desired state will be returned as errors.
    *
    * @var bool
    */
    protected $lock;
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
    * Indicates the requested lock state of the users.
    If _true_ was specified, the users will be _locked_. _False_ will unlock the previously _locked_ users.
    Users which are already in desired state will be returned as errors.
    *
    * @return bool
    */
    public function getLock() : bool
    {
        return $this->lock;
    }
    /**
    * Indicates the requested lock state of the users.
    If _true_ was specified, the users will be _locked_. _False_ will unlock the previously _locked_ users.
    Users which are already in desired state will be returned as errors.
    *
    * @param bool $lock
    *
    * @return self
    */
    public function setLock(bool $lock) : self
    {
        $this->initialized['lock'] = true;
        $this->lock = $lock;
        return $this;
    }
}