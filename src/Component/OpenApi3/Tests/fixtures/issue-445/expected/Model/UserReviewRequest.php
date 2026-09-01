<?php

namespace PicturePark\API\Model;

class UserReviewRequest
{
    /**
     * Indicates the requested review state of the user.
     * If _true_ is specified, user will be transitioned into _reviewed_ state. _False_ will put the user back into _to be reviewed_ state.
     *
     * @var bool
     */
    public bool $reviewed;
}