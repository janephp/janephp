<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppLogDestinationDefinition implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $name;
    /**
     * Papertrail configuration.
     *
     * @var AppLogDestinationPapertrailSpec
     */
    public AppLogDestinationPapertrailSpec $papertrail;
    /**
     * DataDog configuration.
     *
     * @var AppLogDestinationDatadogSpec
     */
    public AppLogDestinationDatadogSpec $datadog;
    /**
     * Logtail configuration.
     *
     * @var AppLogDestinationLogtailSpec
     */
    public AppLogDestinationLogtailSpec $logtail;
    /**
     * OpenSearch configuration.
     *
     * @var AppLogDestinationOpenSearchSpec
     */
    public AppLogDestinationOpenSearchSpec $openSearch;
    public function definedProperties(): array
    {
        return ['name' => 'name', 'papertrail' => 'papertrail', 'datadog' => 'datadog', 'logtail' => 'logtail', 'openSearch' => 'open_search'];
    }
}