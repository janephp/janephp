<?php

namespace PicturePark\API\Model;

class FieldExistsResponse
{
    /**
     * Indicates if a field with the specified ID currently exists.
     *
     * @var bool
     */
    public bool $exists;
    /**
     * Indicates if a field with the specified ID was previously used.
     * A field ID that was previously in use cannot be used again.
     *
     * @var bool
     */
    public bool $previouslyUsed;
    /**
     * If the field does already exist or has already existed, this will contain the ID
     * of the schema containing it. It case of parent-child schemas, a field ID
     * has to be unique across the schema hierarchy.
     *
     * @var string|null
     */
    public ?string $schemaId;
}