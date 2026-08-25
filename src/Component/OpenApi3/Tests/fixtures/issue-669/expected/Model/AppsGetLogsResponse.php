<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppsGetLogsResponse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var list<string>
     */
    protected $historicUrls;
    /**
     * A URL of the real-time live logs. This URL may use either the `https://` or `wss://` protocols and will keep pushing live logs as they become available.
     *
     * @var string
     */
    protected $liveUrl;
    /**
     * @return list<string>
     */
    public function getHistoricUrls(): array
    {
        return $this->historicUrls;
    }
    /**
     * @param list<string> $historicUrls
     *
     * @return self
     */
    public function setHistoricUrls(array $historicUrls): self
    {
        $this->initialized['historicUrls'] = true;
        $this->historicUrls = $historicUrls;
        return $this;
    }
    /**
     * A URL of the real-time live logs. This URL may use either the `https://` or `wss://` protocols and will keep pushing live logs as they become available.
     *
     * @return string
     */
    public function getLiveUrl(): string
    {
        return $this->liveUrl;
    }
    /**
     * A URL of the real-time live logs. This URL may use either the `https://` or `wss://` protocols and will keep pushing live logs as they become available.
     *
     * @param string $liveUrl
     *
     * @return self
     */
    public function setLiveUrl(string $liveUrl): self
    {
        $this->initialized['liveUrl'] = true;
        $this->liveUrl = $liveUrl;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['historicUrls' => ['historic_urls', 'getHistoricUrls', 'setHistoricUrls'], 'liveUrl' => ['live_url', 'getLiveUrl', 'setLiveUrl']];
    }
}