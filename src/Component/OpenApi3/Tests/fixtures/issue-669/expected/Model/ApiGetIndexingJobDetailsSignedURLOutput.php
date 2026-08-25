<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiGetIndexingJobDetailsSignedURLOutput implements AdditionalPropertiesInterface
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
     * The signed url for downloading the indexing job details
     *
     * @var string
     */
    protected $signedUrl;
    /**
     * The signed url for downloading the indexing job details
     *
     * @return string
     */
    public function getSignedUrl(): string
    {
        return $this->signedUrl;
    }
    /**
     * The signed url for downloading the indexing job details
     *
     * @param string $signedUrl
     *
     * @return self
     */
    public function setSignedUrl(string $signedUrl): self
    {
        $this->initialized['signedUrl'] = true;
        $this->signedUrl = $signedUrl;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['signedUrl' => ['signed_url', 'getSignedUrl', 'setSignedUrl']];
    }
}