<?php

namespace PicturePark\API\Model;

class UserLockRequest
{
    /**
     * Indicates the requested lock state of the user.
     * If _true_ was specified, the user will be _locked_. _False_ will unlock the previously _locked_ user.
     * If User is already in desired state, this will be returned as error.
     *
     * @var bool
     */
    public bool $lock;
}