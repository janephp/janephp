<?php

namespace PicturePark\API\Model;

class ListItemDeleteManyFilterRequest
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Filters the list items that need to be deleted.
     *
     * @var mixed
     */
    protected $filterRequest;
    /**
     * A value indicating whether references to the list item should be removed.
     *
     * @var bool
     */
    protected $forceReferenceRemoval;
    /**
     * Create a progress notification and notify on progress. Notifications are shown in the UI only to the same use who triggered the delete request.
     *
     * @var bool
     */
    protected $notifyProgress;
    /**
     * Filters the list items that need to be deleted.
     *
     * @return mixed
     */
    public function getFilterRequest()
    {
        return $this->filterRequest;
    }
    /**
     * Filters the list items that need to be deleted.
     *
     * @param mixed $filterRequest
     *
     * @return self
     */
    public function setFilterRequest($filterRequest): self
    {
        $this->initialized['filterRequest'] = true;
        $this->filterRequest = $filterRequest;
        return $this;
    }
    /**
     * A value indicating whether references to the list item should be removed.
     *
     * @return bool
     */
    public function getForceReferenceRemoval(): bool
    {
        return $this->forceReferenceRemoval;
    }
    /**
     * A value indicating whether references to the list item should be removed.
     *
     * @param bool $forceReferenceRemoval
     *
     * @return self
     */
    public function setForceReferenceRemoval(bool $forceReferenceRemoval): self
    {
        $this->initialized['forceReferenceRemoval'] = true;
        $this->forceReferenceRemoval = $forceReferenceRemoval;
        return $this;
    }
    /**
     * Create a progress notification and notify on progress. Notifications are shown in the UI only to the same use who triggered the delete request.
     *
     * @return bool
     */
    public function getNotifyProgress(): bool
    {
        return $this->notifyProgress;
    }
    /**
     * Create a progress notification and notify on progress. Notifications are shown in the UI only to the same use who triggered the delete request.
     *
     * @param bool $notifyProgress
     *
     * @return self
     */
    public function setNotifyProgress(bool $notifyProgress): self
    {
        $this->initialized['notifyProgress'] = true;
        $this->notifyProgress = $notifyProgress;
        return $this;
    }
}