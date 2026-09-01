<?php

namespace PicturePark\API\Model;

class ListItem
{
    /**
     * Audit information.
     *
     * @var UserAudit|null
     */
    public ?UserAudit $audit;
    /**
     * The list item id.
     *
     * @var string
     */
    public string $id;
    /**
     * The id of the schema with schema type list.
     *
     * @var string|null
     */
    public ?string $contentSchemaId;
    /**
     * Contains language specific display values, rendered according to the list schema's display pattern configuration.
     *
     * @var array<string, string>|null
     */
    public ?iterable $displayValues;
    /**
     * The content data of the list item.
     *
     * @var array<string, mixed>|null
     */
    public ?iterable $content;
    /**
     * All the ids of the broken references (tagboxes)
     *
     * @var list<string>|null
     */
    public ?array $brokenReferenceIds;
    /**
     * All the target ids of the broken relations
     *
     * @var list<string>|null
     */
    public ?array $brokenRelationTargetIds;
    /**
     * All the ids of the broken indirect references (tagbox that has a property that reference a broken tagbox)
     *
     * @var list<string>|null
     */
    public ?array $brokenIndirectReferenceIds;
    /**
     * LifeCycle of list item
     *
     * @var string
     */
    public string $lifeCycle;
}