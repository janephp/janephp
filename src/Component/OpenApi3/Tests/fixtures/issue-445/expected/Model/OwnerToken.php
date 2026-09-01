<?php

namespace PicturePark\API\Model;

class OwnerToken
{
    /**
     * The ownertoken id.
     *
     * @var string|null
     */
    public ?string $id;
    /**
     * The id of the user to whom this ownertoken currently belongs to.
     *
     * @var string|null
     */
    public ?string $userId;
}