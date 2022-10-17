<?php

namespace PicturePark\API\Model;

class UserReviewManyRequest extends \ArrayObject
{
    /**
     * User IDs.
     *
     * @var string[]
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
        $this->reviewed = $reviewed;
        return $this;
    }
}