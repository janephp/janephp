<?php

namespace PicturePark\API\Model;

class IndexFieldsSearchBySchemaIdsRequest
{
    /**
     * The IDs of the schemas for which the indexed fields should be returned.
     *
     * @var list<string>|null
     */
    public ?array $schemaIds;
    /**
     * Controls how the search works which schemas should be considered in the search.
     * AllDescendantsFieldsOnRootSchema: All indexed fields from descendant schemas of root ones will be returned. Schemas that are not root schemas will be ignored.
     * SchemaAndParentFieldsOnly: Indexed fields of the requested schema and its parents will be returned.
     *
     * @var string
     */
    public string $searchMode = 'AllDescendantsFieldsOnRootSchema';
}