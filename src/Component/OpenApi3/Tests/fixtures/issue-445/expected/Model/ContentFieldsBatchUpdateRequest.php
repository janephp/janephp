<?php

namespace PicturePark\API\Model;

class ContentFieldsBatchUpdateRequest
{
    /**
     * Changes that need to be applied to the existing content metadata. The same set of changes is applied to all contents.
     *
     * @var MetadataValuesChangeCommandBase[]
     */
    protected $changeCommands;
    /**
     * Allows updating contents with references to list items or contents that do not exist in the system.
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
     * 
     *
     * @var string
     */
    protected $kind;
    /**
     * The IDs of the contents whose fields need to be updated.
     *
     * @var string[]
     */
    protected $contentIds;
    /**
     * Changes that need to be applied to the existing content metadata. The same set of changes is applied to all contents.
     *
     * @return MetadataValuesChangeCommandBase[]
     */
    public function getChangeCommands() : array
    {
        return $this->changeCommands;
    }
    /**
     * Changes that need to be applied to the existing content metadata. The same set of changes is applied to all contents.
     *
     * @param MetadataValuesChangeCommandBase[] $changeCommands
     *
     * @return self
     */
    public function setChangeCommands(array $changeCommands) : self
    {
        $this->changeCommands = $changeCommands;
        return $this;
    }
    /**
     * Allows updating contents with references to list items or contents that do not exist in the system.
     *
     * @return bool
     */
    public function getAllowMissingDependencies() : bool
    {
        return $this->allowMissingDependencies;
    }
    /**
     * Allows updating contents with references to list items or contents that do not exist in the system.
     *
     * @param bool $allowMissingDependencies
     *
     * @return self
     */
    public function setAllowMissingDependencies(bool $allowMissingDependencies) : self
    {
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
        $this->notifyProgress = $notifyProgress;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getKind() : string
    {
        return $this->kind;
    }
    /**
     * 
     *
     * @param string $kind
     *
     * @return self
     */
    public function setKind(string $kind) : self
    {
        $this->kind = $kind;
        return $this;
    }
    /**
     * The IDs of the contents whose fields need to be updated.
     *
     * @return string[]
     */
    public function getContentIds() : array
    {
        return $this->contentIds;
    }
    /**
     * The IDs of the contents whose fields need to be updated.
     *
     * @param string[] $contentIds
     *
     * @return self
     */
    public function setContentIds(array $contentIds) : self
    {
        $this->contentIds = $contentIds;
        return $this;
    }
}