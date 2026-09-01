<?php

namespace PicturePark\API\Model;

class SchemaOwnershipTransferManyRequest
{
    /**
     * The schema ids.
     *
     * @var list<string>|null
     */
    public ?array $schemaIds;
    /**
     * The id of user to whom the schemas have to be transferred to.
     *
     * @var string|null
     */
    public ?string $transferUserId;
}