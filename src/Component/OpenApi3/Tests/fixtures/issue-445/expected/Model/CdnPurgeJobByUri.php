<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class CdnPurgeJobByUri extends CdnPurgeJobBase implements AdditionalPropertiesInterface
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
     * @var string|null
     */
    protected $uri;
    /**
     * @return string|null
     */
    public function getUri(): ?string
    {
        return $this->uri;
    }
    /**
     * @param string|null $uri
     *
     * @return self
     */
    public function setUri(?string $uri): self
    {
        $this->initialized['uri'] = true;
        $this->uri = $uri;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['uri' => ['uri', 'getUri', 'setUri']];
    }
}