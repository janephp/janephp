<?php

namespace PicturePark\API\Model;

class SchemaImportRequest
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * ID of the file transfer identifying the file previously uploaded.
     *
     * @var string
     */
    protected $fileTransferId;
    /**
     * Allow creating list items that refer to list items or contents that don't exist in the system.
     *
     * @var bool
     */
    protected $allowMissingDependencies;
    /**
     * Import the list items belonging to the schema.
     *
     * @var bool
     */
    protected $importListItems;
    /**
     * ID of the file transfer identifying the file previously uploaded.
     *
     * @return string
     */
    public function getFileTransferId() : string
    {
        return $this->fileTransferId;
    }
    /**
     * ID of the file transfer identifying the file previously uploaded.
     *
     * @param string $fileTransferId
     *
     * @return self
     */
    public function setFileTransferId(string $fileTransferId) : self
    {
        $this->initialized['fileTransferId'] = true;
        $this->fileTransferId = $fileTransferId;
        return $this;
    }
    /**
     * Allow creating list items that refer to list items or contents that don't exist in the system.
     *
     * @return bool
     */
    public function getAllowMissingDependencies() : bool
    {
        return $this->allowMissingDependencies;
    }
    /**
     * Allow creating list items that refer to list items or contents that don't exist in the system.
     *
     * @param bool $allowMissingDependencies
     *
     * @return self
     */
    public function setAllowMissingDependencies(bool $allowMissingDependencies) : self
    {
        $this->initialized['allowMissingDependencies'] = true;
        $this->allowMissingDependencies = $allowMissingDependencies;
        return $this;
    }
    /**
     * Import the list items belonging to the schema.
     *
     * @return bool
     */
    public function getImportListItems() : bool
    {
        return $this->importListItems;
    }
    /**
     * Import the list items belonging to the schema.
     *
     * @param bool $importListItems
     *
     * @return self
     */
    public function setImportListItems(bool $importListItems) : self
    {
        $this->initialized['importListItems'] = true;
        $this->importListItems = $importListItems;
        return $this;
    }
}