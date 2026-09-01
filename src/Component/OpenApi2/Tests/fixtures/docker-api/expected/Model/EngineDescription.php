<?php

namespace Docker\Api\Model;

class EngineDescription
{
    /**
     * @var string
     */
    public string $engineVersion;
    /**
     * @var array<string, string>
     */
    public iterable $labels;
    /**
     * @var list<EngineDescriptionPluginsItem>
     */
    public array $plugins;
}