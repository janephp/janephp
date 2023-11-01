<?php

namespace PicturePark\API\Model;

class SchemaImportResult
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Number of schemas imported
     *
     * @var int
     */
    protected $importedSchemaCount;
    /**
     * Number of schema skipped during import phase because they were already found in the system
     *
     * @var int
     */
    protected $skippedSchemaCount;
    /**
     * Total number of schemas requested to be imported
     *
     * @var int
     */
    protected $totalSchemaCount;
    /**
     * Ids of the schemas that were not imported because already found in the system
     *
     * @var string[]|null
     */
    protected $skippedSchemaIds;
    /**
     * Ids of the schemas that were successfully imported
     *
     * @var string[]|null
     */
    protected $importedSchemaIds;
    /**
     * Number of schemas imported
     *
     * @return int
     */
    public function getImportedSchemaCount() : int
    {
        return $this->importedSchemaCount;
    }
    /**
     * Number of schemas imported
     *
     * @param int $importedSchemaCount
     *
     * @return self
     */
    public function setImportedSchemaCount(int $importedSchemaCount) : self
    {
        $this->initialized['importedSchemaCount'] = true;
        $this->importedSchemaCount = $importedSchemaCount;
        return $this;
    }
    /**
     * Number of schema skipped during import phase because they were already found in the system
     *
     * @return int
     */
    public function getSkippedSchemaCount() : int
    {
        return $this->skippedSchemaCount;
    }
    /**
     * Number of schema skipped during import phase because they were already found in the system
     *
     * @param int $skippedSchemaCount
     *
     * @return self
     */
    public function setSkippedSchemaCount(int $skippedSchemaCount) : self
    {
        $this->initialized['skippedSchemaCount'] = true;
        $this->skippedSchemaCount = $skippedSchemaCount;
        return $this;
    }
    /**
     * Total number of schemas requested to be imported
     *
     * @return int
     */
    public function getTotalSchemaCount() : int
    {
        return $this->totalSchemaCount;
    }
    /**
     * Total number of schemas requested to be imported
     *
     * @param int $totalSchemaCount
     *
     * @return self
     */
    public function setTotalSchemaCount(int $totalSchemaCount) : self
    {
        $this->initialized['totalSchemaCount'] = true;
        $this->totalSchemaCount = $totalSchemaCount;
        return $this;
    }
    /**
     * Ids of the schemas that were not imported because already found in the system
     *
     * @return string[]|null
     */
    public function getSkippedSchemaIds() : ?array
    {
        return $this->skippedSchemaIds;
    }
    /**
     * Ids of the schemas that were not imported because already found in the system
     *
     * @param string[]|null $skippedSchemaIds
     *
     * @return self
     */
    public function setSkippedSchemaIds(?array $skippedSchemaIds) : self
    {
        $this->initialized['skippedSchemaIds'] = true;
        $this->skippedSchemaIds = $skippedSchemaIds;
        return $this;
    }
    /**
     * Ids of the schemas that were successfully imported
     *
     * @return string[]|null
     */
    public function getImportedSchemaIds() : ?array
    {
        return $this->importedSchemaIds;
    }
    /**
     * Ids of the schemas that were successfully imported
     *
     * @param string[]|null $importedSchemaIds
     *
     * @return self
     */
    public function setImportedSchemaIds(?array $importedSchemaIds) : self
    {
        $this->initialized['importedSchemaIds'] = true;
        $this->importedSchemaIds = $importedSchemaIds;
        return $this;
    }
}