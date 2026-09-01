<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class CheckUpdatable implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A human-friendly display name.
     *
     * @var string
     */
    public string $name;
    /**
     * The type of health check to perform.
     *
     * @var string
     */
    public string $type;
    /**
     * The endpoint to perform healthchecks on.
     *
     * @var string
     */
    public string $target;
    /**
     * An array containing the selected regions to perform healthchecks from.
     *
     * @var list<string>
     */
    public array $regions;
    /**
     * A boolean value indicating whether the check is enabled/disabled.
     *
     * @var bool
     */
    public bool $enabled = true;
    public function definedProperties(): array
    {
        return ['name' => 'name', 'type' => 'type', 'target' => 'target', 'regions' => 'regions', 'enabled' => 'enabled'];
    }
}