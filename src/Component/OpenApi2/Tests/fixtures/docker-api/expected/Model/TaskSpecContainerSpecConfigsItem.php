<?php

namespace Docker\Api\Model;

class TaskSpecContainerSpecConfigsItem
{
    /**
     * File represents a specific target that is backed by a file.
     * 
     * <p><br /><p>
     * 
     * > **Note**: `Configs.File` and `Configs.Runtime` are mutually exclusive
     * 
     *
     * @var TaskSpecContainerSpecConfigsItemFile
     */
    public TaskSpecContainerSpecConfigsItemFile $file;
    /**
     * Runtime represents a target that is not mounted into the
     * container but is used by the task
     * 
     * <p><br /><p>
     * 
     * > **Note**: `Configs.File` and `Configs.Runtime` are mutually
     * > exclusive
     * 
     *
     * @var mixed
     */
    public $runtime;
    /**
     * ConfigID represents the ID of the specific config that we're
     * referencing.
     * 
     *
     * @var string
     */
    public string $configID;
    /**
     * ConfigName is the name of the config that this references,
     * but this is just provided for lookup/display purposes. The
     * config in the reference will be identified by its ID.
     * 
     *
     * @var string
     */
    public string $configName;
}