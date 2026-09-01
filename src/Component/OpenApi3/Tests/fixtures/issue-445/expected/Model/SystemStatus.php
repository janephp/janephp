<?php

namespace PicturePark\API\Model;

class SystemStatus
{
    /**
     * The status of the search indices.
     *
     * @var list<StatusOfSearchIndexState>|null
     */
    public ?array $searchIndicesStatus;
    /**
     * The status of the display values.
     *
     * @var list<StatusOfDisplayValuesState>|null
     */
    public ?array $displayValuesStatus;
    /**
     * The status of the contents and list items.
     *
     * @var list<StatusOfMetadataState>|null
     */
    public ?array $metadataStatus;
}