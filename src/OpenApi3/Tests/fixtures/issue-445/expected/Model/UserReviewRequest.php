<?php

namespace PicturePark\API\Model;

class UserReviewRequest
{
    /**
    * Indicates the requested review state of the user.
    If _true_ is specified, user will be transitioned into _reviewed_ state. _False_ will put the user back into _to be reviewed_ state.
    *
    * @var bool
    */
    protected $reviewed;
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