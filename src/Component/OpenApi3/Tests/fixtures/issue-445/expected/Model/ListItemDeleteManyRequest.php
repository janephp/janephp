<?php

namespace PicturePark\API\Model;

class ListItemDeleteManyRequest
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * IDs of the list items to delete.
     *
     * @var string[]
     */
    protected $listItemIds;
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
     * IDs of the list items to delete.
     *
     * @return string[]
     */
    public function getListItemIds() : array
    {
        return $this->listItemIds;
    }
    /**
     * IDs of the list items to delete.
     *
     * @param string[] $listItemIds
     *
     * @return self
     */
    public function setListItemIds(array $listItemIds) : self
    {
        $this->initialized['listItemIds'] = true;
        $this->listItemIds = $listItemIds;
        return $this;
    }
    /**
     * A value indicating whether references to the list item should be removed.
     *
     * @return bool
     */
    public function getForceReferenceRemoval() : bool
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
    public function setForceReferenceRemoval(bool $forceReferenceRemoval) : self
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
    public function getNotifyProgress() : bool
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
    public function setNotifyProgress(bool $notifyProgress) : self
    {
        $this->initialized['notifyProgress'] = true;
        $this->notifyProgress = $notifyProgress;
        return $this;
    }
}