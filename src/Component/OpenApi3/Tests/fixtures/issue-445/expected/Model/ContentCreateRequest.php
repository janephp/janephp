<?php

namespace PicturePark\API\Model;

class ContentCreateRequest
{
    /**
     * The ID of the content schema. The SchemaType of the specified schema must be Content.
     * The schema specifies the structure of the Content dictionary.
     *
     * @var string
     */
    public string $contentSchemaId;
    /**
     * An optional list of IDs of the schemas that form the layers of the content.
     * The SchemaType of the specified schemas must be Layer.
     *
     * @var list<string>|null
     */
    public ?array $layerSchemaIds;
    /**
     * The content data of the content. It's an object of dynamic metadata whose structure is defined in the Content schema identified by the ContentSchemaId property.
     *
     * @var array<string, mixed>|null
     */
    public ?iterable $content;
    /**
     * The dynamic data structure matching the field schematics of the schemas with type layer (LayerSchemaIds).
     * The metadata belonging to the layers of the content. It's a dictionary of dynamic metadata whose structure is defined in the Layer schemas identified
     * by the LayerSchemaIds property.
     *
     * @var array<string, mixed>|null
     */
    public ?iterable $metadata;
    /**
     * An optional list of content permission set IDs which control content permissions. These permissions control content accessibility for the users that do not own the content.
     *
     * @var list<string>|null
     */
    public ?array $contentPermissionSetIds;
    /**
     * Optional client reference for this request.
     * Will be returned back in response to make easier for clients to match request items with the respective results.
     * It is not persisted anywhere and it is ignored in single operations.
     *
     * @var string|null
     */
    public ?string $requestId;
}