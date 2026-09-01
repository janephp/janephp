<?php

namespace PicturePark\API\Model;

class MetadataReference
{
    /**
     * Target ID of reference.
     *
     * @var string
     */
    public string $targetMetadataItemId;
    /**
     * Indicates if the source of the reference is restricted because of permissions.
     * If this is true and the SourceMetadataItemId property is filled, the user does not have the
     * edit permission on the source metadata item. If the SourceMetadataItemId is null, the user also
     * does not have the view permission on that item.
     *
     * @var bool
     */
    public bool $isRestricted;
    /**
     * ID of the source of the reference.
     *
     * @var string|null
     */
    public ?string $sourceMetadataItemId;
    /**
     * DocType of the source of the reference.
     *
     * @var string|null
     */
    public ?string $sourceDocType;
}