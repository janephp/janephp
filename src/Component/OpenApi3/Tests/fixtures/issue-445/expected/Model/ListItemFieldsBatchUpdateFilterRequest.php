<?php

namespace PicturePark\API\Model;

class ListItemFieldsBatchUpdateFilterRequest
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
     * Filters the list items on which the change commands must be applied.
     *
     * @var mixed
     */
    protected $filterRequest;
    /**
     * Changes that need to be applied to the existing list items. The same set of changes is applied to all list items.
     *
     * @var list<MetadataValuesChangeCommandBase>
     */
    protected $changeCommands;
    /**
     * Allow updating list items with references to list items or contents that do not exist in the system.
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
     * Filters the list items on which the change commands must be applied.
     *
     * @return mixed
     */
    public function getFilterRequest()
    {
        return $this->filterRequest;
    }
    /**
     * Filters the list items on which the change commands must be applied.
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
     * Changes that need to be applied to the existing list items. The same set of changes is applied to all list items.
     *
     * @return list<MetadataValuesChangeCommandBase>
     */
    public function getChangeCommands(): array
    {
        return $this->changeCommands;
    }
    /**
     * Changes that need to be applied to the existing list items. The same set of changes is applied to all list items.
     *
     * @param list<MetadataValuesChangeCommandBase> $changeCommands
     *
     * @return self
     */
    public function setChangeCommands(array $changeCommands): self
    {
        $this->initialized['changeCommands'] = true;
        $this->changeCommands = $changeCommands;
        return $this;
    }
    /**
     * Allow updating list items with references to list items or contents that do not exist in the system.
     *
     * @return bool
     */
    public function getAllowMissingDependencies(): bool
    {
        return $this->allowMissingDependencies;
    }
    /**
     * Allow updating list items with references to list items or contents that do not exist in the system.
     *
     * @param bool $allowMissingDependencies
     *
     * @return self
     */
    public function setAllowMissingDependencies(bool $allowMissingDependencies): self
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
    public function getNotifyProgress(): bool
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
    public function setNotifyProgress(bool $notifyProgress): self
    {
        $this->initialized['notifyProgress'] = true;
        $this->notifyProgress = $notifyProgress;
        return $this;
    }
}