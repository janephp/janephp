<?php

namespace PicturePark\API\Model;

class ContentDeleteManyFilterRequest
{
    /**
     * Filters the contents that need to be deleted.
     *
     * @var ContentFilterRequest
     */
    public ContentFilterRequest $filterRequest;
    /**
     * A value indicating whether references to the content items should be removed.
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