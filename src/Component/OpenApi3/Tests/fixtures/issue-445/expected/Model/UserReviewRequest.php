<?php

namespace PicturePark\API\Model;

class UserReviewRequest
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
        $this->initialized['reviewed'] = true;
        $this->reviewed = $reviewed;
        return $this;
    }
}