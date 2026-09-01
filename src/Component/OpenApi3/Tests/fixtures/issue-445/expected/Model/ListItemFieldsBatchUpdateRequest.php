<?php

namespace PicturePark\API\Model;

class ListItemFieldsBatchUpdateRequest
{
    /**
     * The ids of the list items whose fields need to be updated.
     *
     * @var list<string>
     */
    public array $listItemIds;
    /**
     * Changes that need to be applied to the existing list items. The same set of changes is applied to all list items.
     *
     * @var list<MetadataValuesChangeCommandBase>
     */
    public array $changeCommands;
    /**
     * Allows updating list items with references to list items or contents that do not exist in the system.
     *
     * @var bool
     */
    public bool $allowMissingDependencies;
    /**
     * Create a progress notification and notify on progress. Notifications are shown in the UI only to the same use who triggered the batch update.
     *
     * @var bool
     */
    public bool $notifyProgress;
}