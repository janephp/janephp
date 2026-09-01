<?php

namespace PicturePark\API\Model;

class Content
{
    /**
     * Audit information.
     *
     * @var UserAudit|null
     */
    public ?UserAudit $audit;
    /**
     * The id of the schema with schema type content.
     *
     * @var string
     */
    public string $contentSchemaId;
    /**
     * The content type of this content. All except Virtual are binary files.
     *
     * @var string
     */
    public string $contentType;
    /**
     * An optional id list of schemas with schema type layer.
     *
     * @var list<string>|null
     */
    public ?array $layerSchemaIds;
    /**
     * Contains display values of the specified language, rendered according to the content schema's display pattern configuration.
     *
     * @var array<string, string>
     */
    public iterable $displayValues;
    /**
     * @var string
     */
    public string $id;
    /**
     * All the ids of the broken references (tagboxes)
     *
     * @var list<string>|null
     */
    public ?array $brokenReferenceIds;
    /**
     * All the ids of the broken indirect references (tagbox that has a property that reference a broken tagbox)
     *
     * @var list<string>|null
     */
    public ?array $brokenIndirectReferenceIds;
    /**
     * All the target ids of the broken relations
     *
     * @var list<string>|null
     */
    public ?array $brokenRelationTargetIds;
    /**
     * Life cycle of content
     *
     * @var string
     */
    public string $lifeCycle;
}