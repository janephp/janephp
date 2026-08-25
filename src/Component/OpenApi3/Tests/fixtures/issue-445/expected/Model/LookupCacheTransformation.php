<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class LookupCacheTransformation extends BusinessRuleTransformation implements AdditionalPropertiesInterface
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
     * Name of the cache to use.
     *
     * @var string|null
     */
    protected $namedCache;
    /**
     * Name of the cache to use.
     *
     * @return string|null
     */
    public function getNamedCache(): ?string
    {
        return $this->namedCache;
    }
    /**
     * Name of the cache to use.
     *
     * @param string|null $namedCache
     *
     * @return self
     */
    public function setNamedCache(?string $namedCache): self
    {
        $this->initialized['namedCache'] = true;
        $this->namedCache = $namedCache;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['namedCache' => ['namedCache', 'getNamedCache', 'setNamedCache']];
    }
}