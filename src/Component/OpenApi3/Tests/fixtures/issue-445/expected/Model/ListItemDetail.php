<?php

namespace PicturePark\API\Model;

class ListItemDetail
{
    /**
     * The list item ID.
     *
     * @var string
     */
    public string $id;
    /**
     * The ID of the content schema. The SchemaType of the specified schema must be List.
     *
     * @var string
     */
    public string $contentSchemaId;
    /**
     * The content data of the list item. It's an object of dynamic metadata whose structure is defined in the Content schema specified
     * by the ContentSchemaId property.
     *
     * @var array<string, mixed>|null
     */
    public ?iterable $content;
    /**
     * Contains language specific display values. They are calculated values based on the template stored in the Content schema DisplayPatterns property.
     *
     * @var array<string, string>|null
     */
    public ?iterable $displayValues;
    /**
     * All the IDs of the referenced list items (tagboxes) that do not exist in the system.
     *
     * @var list<string>|null
     */
    public ?array $brokenReferenceIds;
    /**
     * All the IDs of the contents or list items target of a relation that do not exist in the system.
     *
     * @var list<string>|null
     */
    public ?array $brokenRelationTargetIds;
    /**
     * All the IDs of the indirectly referenced list items (tagboxes) that do not exist in the system.
     * They are referenced list items that reference at least a list item that do not exist in the system.
     *
     * @var list<string>|null
     */
    public ?array $brokenIndirectReferenceIds;
    /**
     * Audit information.
     *
     * @var UserAuditDetail|null
     */
    public ?UserAuditDetail $audit;
    /**
     * Activity information: dynamically mapped from configured metadata fields or from audit information if no mapping is configured.
     *
     * @var Activity|null
     */
    public ?Activity $activity;
}