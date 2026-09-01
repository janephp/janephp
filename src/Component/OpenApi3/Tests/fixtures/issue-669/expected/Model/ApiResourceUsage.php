<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiResourceUsage implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<ApiUsageMeasurement>
     */
    public array $measurements;
    /**
     * @var string
     */
    public string $resourceUuid;
    /**
     * @var \DateTime
     */
    public \DateTime $start;
    /**
     * @var \DateTime
     */
    public \DateTime $stop;
    public function definedProperties(): array
    {
        return ['measurements' => 'measurements', 'resourceUuid' => 'resource_uuid', 'start' => 'start', 'stop' => 'stop'];
    }
}