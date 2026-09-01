<?php

namespace PicturePark\API\Model;

class ImportTransferRequest
{
    /**
     * An optional id list of schemas with type layer.
     *
     * @var list<string>|null
     */
    public ?array $layerSchemaIds;
    /**
     * The metadata to be assigned to the imported content. It's a dictionary of dynamic metadata whose structure is defined in the Layer schemas identified
     * by the LayerSchemaIds property.
     *
     * @var array<string, mixed>|null
     */
    public ?iterable $metadata;
    /**
     * An optional id list of content permission sets. Controls content accessibility outside of content ownership.
     *
     * @var list<string>|null
     */
    public ?array $contentPermissionSetIds;
}