<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class DatabaseMaintenanceWindow implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The day of the week on which to apply maintenance updates.
     *
     * @var string
     */
    public string $day;
    /**
     * The hour in UTC at which maintenance updates will be applied in 24 hour format.
     *
     * @var string
     */
    public string $hour;
    /**
     * A boolean value indicating whether any maintenance is scheduled to be performed in the next window.
     *
     * @var bool
     */
    public bool $pending;
    /**
     * A list of strings, each containing information about a pending maintenance update.
     *
     * @var list<string>
     */
    public array $description;
    public function definedProperties(): array
    {
        return ['day' => 'day', 'hour' => 'hour', 'pending' => 'pending', 'description' => 'description'];
    }
}