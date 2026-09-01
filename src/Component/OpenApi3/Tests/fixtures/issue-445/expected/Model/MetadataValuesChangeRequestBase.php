<?php

namespace PicturePark\API\Model;

class MetadataValuesChangeRequestBase
{
    /**
     * Changes that need to be applied to the existing content metadata. The same set of changes is applied to all contents.
     *
     * @var list<MetadataValuesChangeCommandBase>
     */
    public array $changeCommands;
    /**
     * Allows updating contents with references to list items or contents that do not exist in the system.
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
    /**
     * @var string
     */
    public string $kind;
}