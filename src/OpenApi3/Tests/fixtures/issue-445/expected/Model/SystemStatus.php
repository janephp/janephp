<?php

namespace PicturePark\API\Model;

class SystemStatus
{
    /**
     * The status of the search indices.
     *
     * @var StatusOfSearchIndexState[]|null
     */
    protected $searchIndicesStatus;
    /**
     * The status of the display values.
     *
     * @var StatusOfDisplayValuesState[]|null
     */
    protected $displayValuesStatus;
    /**
     * The status of the contents and list items.
     *
     * @var StatusOfMetadataState[]|null
     */
    protected $metadataStatus;
    /**
     * The status of the search indices.
     *
     * @return StatusOfSearchIndexState[]|null
     */
    public function getSearchIndicesStatus() : ?array
    {
        return $this->searchIndicesStatus;
    }
    /**
     * The status of the search indices.
     *
     * @param StatusOfSearchIndexState[]|null $searchIndicesStatus
     *
     * @return self
     */
    public function setSearchIndicesStatus(?array $searchIndicesStatus) : self
    {
        $this->searchIndicesStatus = $searchIndicesStatus;
        return $this;
    }
    /**
     * The status of the display values.
     *
     * @return StatusOfDisplayValuesState[]|null
     */
    public function getDisplayValuesStatus() : ?array
    {
        return $this->displayValuesStatus;
    }
    /**
     * The status of the display values.
     *
     * @param StatusOfDisplayValuesState[]|null $displayValuesStatus
     *
     * @return self
     */
    public function setDisplayValuesStatus(?array $displayValuesStatus) : self
    {
        $this->displayValuesStatus = $displayValuesStatus;
        return $this;
    }
    /**
     * The status of the contents and list items.
     *
     * @return StatusOfMetadataState[]|null
     */
    public function getMetadataStatus() : ?array
    {
        return $this->metadataStatus;
    }
    /**
     * The status of the contents and list items.
     *
     * @param StatusOfMetadataState[]|null $metadataStatus
     *
     * @return self
     */
    public function setMetadataStatus(?array $metadataStatus) : self
    {
        $this->metadataStatus = $metadataStatus;
        return $this;
    }
}