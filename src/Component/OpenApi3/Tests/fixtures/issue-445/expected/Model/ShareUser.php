<?php

namespace PicturePark\API\Model;

class ShareUser
{
    /**
     * Name of user
     *
     * @var string
     */
    public string $displayName;
    /**
     * MD5 hash of email address. Can be used to display gravatar image
     *
     * @var string
     */
    public string $emailHash;
}