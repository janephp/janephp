<?php

namespace PicturePark\API\Model;

class StatusOfMetadataState
{
    /**
     * @var string|null
     */
    public ?string $id;
    /**
     * The state of the contents and list items
     *
     * @var string
     */
    public string $state;
}