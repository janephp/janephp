<?php

namespace Docker\Api\Model;

class PluginConfigRootfs
{
    /**
     * @var string
     */
    public string $type;
    /**
     * @var list<string>
     */
    public array $diffIds;
}