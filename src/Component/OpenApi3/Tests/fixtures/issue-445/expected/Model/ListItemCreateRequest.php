<?php

namespace PicturePark\API\Model;

class ListItemCreateRequest
{
    /**
     * The ID of the content schema. The SchemaType of the specified schema must be List.
     *
     * @var string
     */
    public string $contentSchemaId;
    /**
     * The content data of the list item. It's an object of dynamic metadata whose structure is defined in the Content schema.
     *
     * @var array<string, mixed>|null
     */
    public ?iterable $content;
    /**
     * Optional client reference for this request.
     * Will be returned back in response to make easier for clients to match request items with the respective results.
     * It is not persisted anywhere and it is ignored in single operations.
     *
     * @var string|null
     */
    public ?string $requestId;
}