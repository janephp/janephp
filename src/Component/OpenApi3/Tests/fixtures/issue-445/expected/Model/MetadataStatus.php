<?php

namespace PicturePark\API\Model;

class MetadataStatus
{
    /**
     * The schema ids (of type Content or Layer) for which the contents are outdated and need to be updated.
     *
     * @var list<string>|null
     */
    public ?array $contentOrLayerSchemaIds;
    /**
     * The schema ids (of type List) for which the the list items are outdated and need to be updated.
     *
     * @var list<string>|null
     */
    public ?array $listSchemaIds;
    /**
     * The global state of the Contents and ListItems compared to the schema structure (Green = ok, Red = update needed).
     *
     * @var string
     */
    public string $state;
    /**
     * The field ids that that cannot be used and needs to be cleaned up after updating the outdated contents and list items.
     *
     * @var array<string, list<string>>|null
     */
    public ?iterable $fieldIdsToCleanup;
}