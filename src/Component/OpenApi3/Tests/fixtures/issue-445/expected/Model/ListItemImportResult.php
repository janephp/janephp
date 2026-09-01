<?php

namespace PicturePark\API\Model;

class ListItemImportResult
{
    /**
     * Number of list items imported
     *
     * @var int
     */
    public int $importedListItemCount;
    /**
     * Number of list items skipped during import phase because they were already found in the system
     *
     * @var int
     */
    public int $skippedListItemCount;
    /**
     * Total number of list items requested to be imported
     *
     * @var int
     */
    public int $totalListItemCount;
    /**
     * Ids of the list items that were not imported because already found in the system
     *
     * @var list<string>|null
     */
    public ?array $skippedListItemIds;
    /**
     * Ids of the list items that were successfully imported
     *
     * @var list<string>|null
     */
    public ?array $importedListItemIds;
}