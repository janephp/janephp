<?php

namespace PicturePark\API\Model;

class ListItemFieldsBatchUpdateFilterRequest
{
    /**
     * Filters the list items on which the change commands must be applied.
     *
     * @var ListItemFilterRequest
     */
    public ListItemFilterRequest $filterRequest;
    /**
     * Changes that need to be applied to the existing list items. The same set of changes is applied to all list items.
     *
     * @var list<MetadataValuesChangeCommandBase>
     */
    public array $changeCommands;
    /**
     * Allow updating list items with references to list items or contents that do not exist in the system.
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