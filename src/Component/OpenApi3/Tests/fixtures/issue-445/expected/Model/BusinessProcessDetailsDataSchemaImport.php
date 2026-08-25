<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class BusinessProcessDetailsDataSchemaImport extends BusinessProcessDetailsDataBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Result information of a schema import operation
     *
     * @var SchemaImportResult|null
     */
    protected $schemaImportResult;
    /**
     * Result information of a list item import operation
     *
     * @var ListItemImportResult|null
     */
    protected $listItemImportResult;
    /**
     * Result information of a schema import operation
     *
     * @return SchemaImportResult|null
     */
    public function getSchemaImportResult(): ?SchemaImportResult
    {
        return $this->schemaImportResult;
    }
    /**
     * Result information of a schema import operation
     *
     * @param SchemaImportResult|null $schemaImportResult
     *
     * @return self
     */
    public function setSchemaImportResult(?SchemaImportResult $schemaImportResult): self
    {
        $this->initialized['schemaImportResult'] = true;
        $this->schemaImportResult = $schemaImportResult;
        return $this;
    }
    /**
     * Result information of a list item import operation
     *
     * @return ListItemImportResult|null
     */
    public function getListItemImportResult(): ?ListItemImportResult
    {
        return $this->listItemImportResult;
    }
    /**
     * Result information of a list item import operation
     *
     * @param ListItemImportResult|null $listItemImportResult
     *
     * @return self
     */
    public function setListItemImportResult(?ListItemImportResult $listItemImportResult): self
    {
        $this->initialized['listItemImportResult'] = true;
        $this->listItemImportResult = $listItemImportResult;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['schemaImportResult' => ['schemaImportResult', 'getSchemaImportResult', 'setSchemaImportResult'], 'listItemImportResult' => ['listItemImportResult', 'getListItemImportResult', 'setListItemImportResult']];
    }
}