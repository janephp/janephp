<?php

namespace PicturePark\API\Model;

class IndexFieldsSearchBySchemaIdsRequest
{
    /**
     * The IDs of the schemas for which the indexed fields should be returned.
     *
     * @var string[]|null
     */
    protected $schemaIds;
    /**
    * Controls how the search works which schemas should be considered in the search.
    AllDescendantsFieldsOnRootSchema: All indexed fields from descendant schemas of root ones will be returned. Schemas that are not root schemas will be ignored.
    SchemaAndParentFieldsOnly: Indexed fields of the requested schema and its parents will be returned.
    *
    * @var mixed
    */
    protected $searchMode = 'AllDescendantsFieldsOnRootSchema';
    /**
     * The IDs of the schemas for which the indexed fields should be returned.
     *
     * @return string[]|null
     */
    public function getSchemaIds() : ?array
    {
        return $this->schemaIds;
    }
    /**
     * The IDs of the schemas for which the indexed fields should be returned.
     *
     * @param string[]|null $schemaIds
     *
     * @return self
     */
    public function setSchemaIds(?array $schemaIds) : self
    {
        $this->schemaIds = $schemaIds;
        return $this;
    }
    /**
    * Controls how the search works which schemas should be considered in the search.
    AllDescendantsFieldsOnRootSchema: All indexed fields from descendant schemas of root ones will be returned. Schemas that are not root schemas will be ignored.
    SchemaAndParentFieldsOnly: Indexed fields of the requested schema and its parents will be returned.
    *
    * @return mixed
    */
    public function getSearchMode()
    {
        return $this->searchMode;
    }
    /**
    * Controls how the search works which schemas should be considered in the search.
    AllDescendantsFieldsOnRootSchema: All indexed fields from descendant schemas of root ones will be returned. Schemas that are not root schemas will be ignored.
    SchemaAndParentFieldsOnly: Indexed fields of the requested schema and its parents will be returned.
    *
    * @param mixed $searchMode
    *
    * @return self
    */
    public function setSearchMode($searchMode) : self
    {
        $this->searchMode = $searchMode;
        return $this;
    }
}