<?php

namespace Github\Model;

use Github\Runtime\AdditionalAndPatternProperties;
use Github\Runtime\AdditionalPropertiesInterface;
class SearchResultTextMatchesItem implements AdditionalPropertiesInterface
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
     * @var string
     */
    protected $objectUrl;
    /**
     * @var string|null
     */
    protected $objectType;
    /**
     * @var string
     */
    protected $property;
    /**
     * @var string
     */
    protected $fragment;
    /**
     * @var list<SearchResultTextMatchesItemMatchesItem>
     */
    protected $matches;
    /**
     * @return string
     */
    public function getObjectUrl(): string
    {
        return $this->objectUrl;
    }
    /**
     * @param string $objectUrl
     *
     * @return self
     */
    public function setObjectUrl(string $objectUrl): self
    {
        $this->initialized['objectUrl'] = true;
        $this->objectUrl = $objectUrl;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getObjectType(): ?string
    {
        return $this->objectType;
    }
    /**
     * @param string|null $objectType
     *
     * @return self
     */
    public function setObjectType(?string $objectType): self
    {
        $this->initialized['objectType'] = true;
        $this->objectType = $objectType;
        return $this;
    }
    /**
     * @return string
     */
    public function getProperty(): string
    {
        return $this->property;
    }
    /**
     * @param string $property
     *
     * @return self
     */
    public function setProperty(string $property): self
    {
        $this->initialized['property'] = true;
        $this->property = $property;
        return $this;
    }
    /**
     * @return string
     */
    public function getFragment(): string
    {
        return $this->fragment;
    }
    /**
     * @param string $fragment
     *
     * @return self
     */
    public function setFragment(string $fragment): self
    {
        $this->initialized['fragment'] = true;
        $this->fragment = $fragment;
        return $this;
    }
    /**
     * @return list<SearchResultTextMatchesItemMatchesItem>
     */
    public function getMatches(): array
    {
        return $this->matches;
    }
    /**
     * @param list<SearchResultTextMatchesItemMatchesItem> $matches
     *
     * @return self
     */
    public function setMatches(array $matches): self
    {
        $this->initialized['matches'] = true;
        $this->matches = $matches;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['objectUrl' => ['object_url', 'getObjectUrl', 'setObjectUrl'], 'objectType' => ['object_type', 'getObjectType', 'setObjectType'], 'property' => ['property', 'getProperty', 'setProperty'], 'fragment' => ['fragment', 'getFragment', 'setFragment'], 'matches' => ['matches', 'getMatches', 'setMatches']];
    }
}