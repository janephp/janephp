<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class ApiStatisticsEvent extends ApplicationEvent implements AdditionalPropertiesInterface
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
     * @var array<string, int>|null
     */
    protected $requestsPerClient;
    /**
     * @return array<string, int>|null
     */
    public function getRequestsPerClient(): ?iterable
    {
        return $this->requestsPerClient;
    }
    /**
     * @param array<string, int>|null $requestsPerClient
     *
     * @return self
     */
    public function setRequestsPerClient(?iterable $requestsPerClient): self
    {
        $this->initialized['requestsPerClient'] = true;
        $this->requestsPerClient = $requestsPerClient;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['requestsPerClient' => ['requestsPerClient', 'getRequestsPerClient', 'setRequestsPerClient']];
    }
}