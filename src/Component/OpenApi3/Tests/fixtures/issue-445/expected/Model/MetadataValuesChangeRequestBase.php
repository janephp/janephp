<?php

namespace PicturePark\API\Model;

class MetadataValuesChangeRequestBase
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
     */
    public function setChangeCommands(array $changeCommands)
    {
        $this->initialized['changeCommands'] = true;
        $this->changeCommands = $changeCommands;
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
     */
    public function setAllowMissingDependencies(bool $allowMissingDependencies)
    {
        $this->initialized['allowMissingDependencies'] = true;
        $this->allowMissingDependencies = $allowMissingDependencies;
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
     */
    public function setNotifyProgress(bool $notifyProgress)
    {
        $this->initialized['notifyProgress'] = true;
        $this->notifyProgress = $notifyProgress;
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
     */
    public function setKind(string $kind)
    {
        $this->initialized['kind'] = true;
        $this->kind = $kind;
    }
}