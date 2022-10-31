<?php

namespace PicturePark\API\Model;

class ListItemFieldsBatchUpdateRequest
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
     * The ids of the list items whose fields need to be updated.
     *
     * @var string[]
     */
    protected $listItemIds;
    /**
     * Changes that need to be applied to the existing list items. The same set of changes is applied to all list items.
     *
     * @var MetadataValuesChangeCommandBase[]
     */
    protected $changeCommands;
    /**
     * Allows updating list items with references to list items or contents that do not exist in the system.
     *
     * @var bool
     */
    protected $allowMissingDependencies;
    /**
     * Create a progress notification and notify on progress. Notifications are shown in the UI only to the same use who triggered the batch update.
     *
     * @var bool
     */
    protected $notifyProgress;
    /**
     * The ids of the list items whose fields need to be updated.
     *
     * @return string[]
     */
    public function getListItemIds() : array
    {
        return $this->listItemIds;
    }
    /**
     * The ids of the list items whose fields need to be updated.
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
     * Changes that need to be applied to the existing list items. The same set of changes is applied to all list items.
     *
     * @return MetadataValuesChangeCommandBase[]
     */
    public function getChangeCommands() : array
    {
        return $this->changeCommands;
    }
    /**
     * Changes that need to be applied to the existing list items. The same set of changes is applied to all list items.
     *
     * @param MetadataValuesChangeCommandBase[] $changeCommands
     *
     * @return self
     */
    public function setChangeCommands(array $changeCommands) : self
    {
        $this->initialized['changeCommands'] = true;
        $this->changeCommands = $changeCommands;
        return $this;
    }
    /**
     * Allows updating list items with references to list items or contents that do not exist in the system.
     *
     * @return bool
     */
    public function getAllowMissingDependencies() : bool
    {
        return $this->allowMissingDependencies;
    }
    /**
     * Allows updating list items with references to list items or contents that do not exist in the system.
     *
     * @param bool $allowMissingDependencies
     *
     * @return self
     */
    public function setAllowMissingDependencies(bool $allowMissingDependencies) : self
    {
        $this->initialized['allowMissingDependencies'] = true;
        $this->allowMissingDependencies = $allowMissingDependencies;
        return $this;
    }
    /**
     * Create a progress notification and notify on progress. Notifications are shown in the UI only to the same use who triggered the batch update.
     *
     * @return bool
     */
    public function getNotifyProgress() : bool
    {
        return $this->notifyProgress;
    }
    /**
     * Create a progress notification and notify on progress. Notifications are shown in the UI only to the same use who triggered the batch update.
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