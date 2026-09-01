<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppsGetLogsResponse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<string>
     */
    public array $historicUrls;
    /**
     * A URL of the real-time live logs. This URL may use either the `https://` or `wss://` protocols and will keep pushing live logs as they become available.
     *
     * @var string
     */
    public string $liveUrl;
    public function definedProperties(): array
    {
        return ['historicUrls' => 'historic_urls', 'liveUrl' => 'live_url'];
    }
}