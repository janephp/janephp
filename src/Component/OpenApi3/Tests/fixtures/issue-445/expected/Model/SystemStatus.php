<?php

namespace PicturePark\API\Model;

class SystemStatus
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
     * The status of the search indices.
     *
     * @var list<StatusOfSearchIndexState>|null
     */
    protected $searchIndicesStatus;
    /**
     * The status of the display values.
     *
     * @var list<StatusOfDisplayValuesState>|null
     */
    protected $displayValuesStatus;
    /**
     * The status of the contents and list items.
     *
     * @var list<StatusOfMetadataState>|null
     */
    protected $metadataStatus;
    /**
     * The status of the search indices.
     *
     * @return list<StatusOfSearchIndexState>|null
     */
    public function getSearchIndicesStatus() : ?array
    {
        return $this->searchIndicesStatus;
    }
    /**
     * The status of the search indices.
     *
     * @param list<StatusOfSearchIndexState>|null $searchIndicesStatus
     *
     * @return self
     */
    public function setSearchIndicesStatus(?array $searchIndicesStatus) : self
    {
        $this->initialized['searchIndicesStatus'] = true;
        $this->searchIndicesStatus = $searchIndicesStatus;
        return $this;
    }
    /**
     * The status of the display values.
     *
     * @return list<StatusOfDisplayValuesState>|null
     */
    public function getDisplayValuesStatus() : ?array
    {
        return $this->displayValuesStatus;
    }
    /**
     * The status of the display values.
     *
     * @param list<StatusOfDisplayValuesState>|null $displayValuesStatus
     *
     * @return self
     */
    public function setDisplayValuesStatus(?array $displayValuesStatus) : self
    {
        $this->initialized['displayValuesStatus'] = true;
        $this->displayValuesStatus = $displayValuesStatus;
        return $this;
    }
    /**
     * The status of the contents and list items.
     *
     * @return list<StatusOfMetadataState>|null
     */
    public function getMetadataStatus() : ?array
    {
        return $this->metadataStatus;
    }
    /**
     * The status of the contents and list items.
     *
     * @param list<StatusOfMetadataState>|null $metadataStatus
     *
     * @return self
     */
    public function setMetadataStatus(?array $metadataStatus) : self
    {
        $this->initialized['metadataStatus'] = true;
        $this->metadataStatus = $metadataStatus;
        return $this;
    }
}