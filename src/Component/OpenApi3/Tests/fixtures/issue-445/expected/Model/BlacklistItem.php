<?php

namespace PicturePark\API\Model;

class BlacklistItem
{
    /**
     * Friendly name of item.
     *
     * @var string
     */
    public string $name;
    /**
     * Pattern a file name must match to be excluded from the transfer.
     *
     * @var string
     */
    public string $match;
}