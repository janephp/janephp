<?php

namespace PicturePark\API\Model;

class BusinessProcessDetailsDataSchemaImport extends BusinessProcessDetailsDataBase
{
    /**
     * 
     *
     * @var string
     */
    protected $kind;
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
     * 
     *
     * @return string
     */
    public function getKind() : string
    {
        return $this->kind;
    }
    /**
     * 
     *
     * @param string $kind
     *
     * @return self
     */
    public function setKind(string $kind) : self
    {
        $this->kind = $kind;
        return $this;
    }
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
    public function setSchemaImportResult($schemaImportResult) : self
    {
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
    public function setListItemImportResult($listItemImportResult) : self
    {
        $this->listItemImportResult = $listItemImportResult;
        return $this;
    }
}