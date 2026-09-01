<?php

namespace PicturePark\API\Model;

class ShareContentDetail
{
    /**
     * The id of the schema with schema type content.
     *
     * @var string
     */
    public string $contentSchemaId;
    /**
     * An optional id list of schemas with type layer.
     *
     * @var list<string>|null
     */
    public ?array $layerSchemaIds;
    /**
     * The content data. It's an object of dynamic metadata whose structure is defined in the Content schema specified
     * by the ContentSchemaId property.
     *
     * @var array<string, mixed>
     */
    public iterable $content;
    /**
     * The metadata belonging to the layers of the content. It's a dictionary of dynamic metadata whose structure is defined in the Layer schemas identified
     * by the LayerSchemaIds property.
     *
     * @var array<string, mixed>|null
     */
    public ?iterable $metadata;
    /**
     * Content ID.
     *
     * @var string
     */
    public string $id;
    /**
     * List of shared outputs for this content.
     *
     * @var list<ShareOutputBase>
     */
    public array $outputs;
    /**
     * The type of content
     *
     * @var string
     */
    public string $contentType;
    /**
     * Contains language specific display values, rendered according to the content schema's display pattern configuration.
     *
     * @var array<string, string>
     */
    public iterable $displayValues;
    /**
     * Contains an URL that can be used to retrieve the icon corresponding to the file type.
     *
     * @var string|null
     */
    public ?string $iconUrl;
}