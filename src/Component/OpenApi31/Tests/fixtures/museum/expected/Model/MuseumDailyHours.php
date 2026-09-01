<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Museum\Model;

use Jane\Component\OpenApi31\Tests\Expected\Museum\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\Museum\Runtime\AdditionalPropertiesInterface;
class MuseumDailyHours implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var \DateTime
     */
    public \DateTime $date;
    /**
     * Time the museum opens on a specific date. Uses 24 hour time format (`HH:mm`).
     *
     * @var string
     */
    public string $timeOpen;
    /**
     * Time the museum closes on a specific date. Uses 24 hour time format (`HH:mm`).
     *
     * @var string
     */
    public string $timeClose;
    public function definedProperties(): array
    {
        return ['date' => 'date', 'timeOpen' => 'timeOpen', 'timeClose' => 'timeClose'];
    }
}