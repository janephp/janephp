<?php

namespace PicturePark\API\Model;

class BusinessProcessDetailsDataSchemaImport extends BusinessProcessDetailsDataBase
{
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
     * @var mixed|null
     */
    protected $schemaImportResult;
    /**
     * Result information of a list item import operation
     *
     * @var mixed|null
     */
    protected $listItemImportResult;
    /**
     * Result information of a schema import operation
     *
     * @return mixed
     */
    public function getSchemaImportResult()
    {
        return $this->schemaImportResult;
    }
    /**
     * Result information of a schema import operation
     *
     * @param mixed $schemaImportResult
     *
     * @return self
     */
    public function setSchemaImportResult($schemaImportResult): self
    {
        $this->initialized['schemaImportResult'] = true;
        $this->schemaImportResult = $schemaImportResult;
        return $this;
    }
    /**
     * Result information of a list item import operation
     *
     * @return mixed
     */
    public function getListItemImportResult()
    {
        return $this->listItemImportResult;
    }
    /**
     * Result information of a list item import operation
     *
     * @param mixed $listItemImportResult
     *
     * @return self
     */
    public function setListItemImportResult($listItemImportResult): self
    {
        $this->initialized['listItemImportResult'] = true;
        $this->listItemImportResult = $listItemImportResult;
        return $this;
    }
}