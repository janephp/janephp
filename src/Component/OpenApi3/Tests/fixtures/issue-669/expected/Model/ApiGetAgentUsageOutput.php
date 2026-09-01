<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiGetAgentUsageOutput implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Resource Usage Description
     *
     * @var ApiResourceUsage
     */
    public ApiResourceUsage $logInsightsUsage;
    /**
     * Resource Usage Description
     *
     * @var ApiResourceUsage
     */
    public ApiResourceUsage $usage;
    public function definedProperties(): array
    {
        return ['logInsightsUsage' => 'log_insights_usage', 'usage' => 'usage'];
    }
}