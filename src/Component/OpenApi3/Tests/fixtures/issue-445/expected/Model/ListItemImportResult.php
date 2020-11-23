<?php

namespace PicturePark\API\Model;

class ListItemImportResult
{
    /**
     * Number of list items imported
     *
     * @var int
     */
    protected $importedListItemCount;
    /**
     * Number of list items skipped during import phase because they were already found in the system
     *
     * @var int
     */
    protected $skippedListItemCount;
    /**
     * Total number of list items requested to be imported
     *
     * @var int
     */
    protected $totalListItemCount;
    /**
     * Ids of the list items that were not imported because already found in the system
     *
     * @var string[]|null
     */
    protected $skippedListItemIds;
    /**
     * Ids of the list items that were successfully imported
     *
     * @var string[]|null
     */
    protected $importedListItemIds;
    /**
     * Number of list items imported
     *
     * @return int
     */
    public function getImportedListItemCount() : int
    {
        return $this->importedListItemCount;
    }
    /**
     * Number of list items imported
     *
     * @param int $importedListItemCount
     *
     * @return self
     */
    public function setImportedListItemCount(int $importedListItemCount) : self
    {
        $this->importedListItemCount = $importedListItemCount;
        return $this;
    }
    /**
     * Number of list items skipped during import phase because they were already found in the system
     *
     * @return int
     */
    public function getSkippedListItemCount() : int
    {
        return $this->skippedListItemCount;
    }
    /**
     * Number of list items skipped during import phase because they were already found in the system
     *
     * @param int $skippedListItemCount
     *
     * @return self
     */
    public function setSkippedListItemCount(int $skippedListItemCount) : self
    {
        $this->skippedListItemCount = $skippedListItemCount;
        return $this;
    }
    /**
     * Total number of list items requested to be imported
     *
     * @return int
     */
    public function getTotalListItemCount() : int
    {
        return $this->totalListItemCount;
    }
    /**
     * Total number of list items requested to be imported
     *
     * @param int $totalListItemCount
     *
     * @return self
     */
    public function setTotalListItemCount(int $totalListItemCount) : self
    {
        $this->totalListItemCount = $totalListItemCount;
        return $this;
    }
    /**
     * Ids of the list items that were not imported because already found in the system
     *
     * @return string[]|null
     */
    public function getSkippedListItemIds() : ?array
    {
        return $this->skippedListItemIds;
    }
    /**
     * Ids of the list items that were not imported because already found in the system
     *
     * @param string[]|null $skippedListItemIds
     *
     * @return self
     */
    public function setSkippedListItemIds(?array $skippedListItemIds) : self
    {
        $this->skippedListItemIds = $skippedListItemIds;
        return $this;
    }
    /**
     * Ids of the list items that were successfully imported
     *
     * @return string[]|null
     */
    public function getImportedListItemIds() : ?array
    {
        return $this->importedListItemIds;
    }
    /**
     * Ids of the list items that were successfully imported
     *
     * @param string[]|null $importedListItemIds
     *
     * @return self
     */
    public function setImportedListItemIds(?array $importedListItemIds) : self
    {
        $this->importedListItemIds = $importedListItemIds;
        return $this;
    }
}