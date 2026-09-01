<?php

namespace PicturePark\API\Model;

class SchemaOwnershipTransferRequest
{
    /**
     * The id of the user to whom the schema has to be transferred to.
     *
     * @var string|null
     */
    public ?string $transferUserId;
}