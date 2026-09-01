<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class DropletNextBackupWindow implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A time value given in ISO8601 combined date and time format specifying the start of the Droplet's backup window.
     *
     * @var \DateTime
     */
    public \DateTime $start;
    /**
     * A time value given in ISO8601 combined date and time format specifying the end of the Droplet's backup window.
     *
     * @var \DateTime
     */
    public \DateTime $end;
    public function definedProperties(): array
    {
        return ['start' => 'start', 'end' => 'end'];
    }
}