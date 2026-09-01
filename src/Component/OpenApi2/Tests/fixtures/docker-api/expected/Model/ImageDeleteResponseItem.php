<?php

namespace Docker\Api\Model;

class ImageDeleteResponseItem
{
    /**
     * The image ID of an image that was untagged
     *
     * @var string
     */
    public string $untagged;
    /**
     * The image ID of an image that was deleted
     *
     * @var string
     */
    public string $deleted;
}