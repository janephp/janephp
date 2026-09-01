<?php

namespace PicturePark\API\Model;

class ListItemDeleteManyFilterRequest
{
    /**
     * Filters the list items that need to be deleted.
     *
     * @var ListItemFilterRequest
     */
    public ListItemFilterRequest $filterRequest;
    /**
     * A value indicating whether references to the list item should be removed.
     *
     * @var bool
     */
    public bool $forceReferenceRemoval;
    /**
     * Create a progress notification and notify on progress. Notifications are shown in the UI only to the same use who triggered the delete request.
     *
     * @var bool
     */
    public bool $notifyProgress;
}