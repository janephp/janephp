<?php

namespace PicturePark\API\Model;

class UserReviewManyRequest extends \ArrayObject
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
    * Indicates the requested review state of the user.
    If _true_ is specified, user will be transitioned into _reviewed_ state. _False_ will put the user back into _to be reviewed_ state.
    *
    * @var bool
    */
    protected $reviewed;
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
    * Indicates the requested review state of the user.
    If _true_ is specified, user will be transitioned into _reviewed_ state. _False_ will put the user back into _to be reviewed_ state.
    *
    * @return bool
    */
    public function getReviewed() : bool
    {
        return $this->reviewed;
    }
    /**
    * Indicates the requested review state of the user.
    If _true_ is specified, user will be transitioned into _reviewed_ state. _False_ will put the user back into _to be reviewed_ state.
    *
    * @param bool $reviewed
    *
    * @return self
    */
    public function setReviewed(bool $reviewed) : self
    {
        $this->initialized['reviewed'] = true;
        $this->reviewed = $reviewed;
        return $this;
    }
}