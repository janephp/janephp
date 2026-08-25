<?php

namespace ApiPlatform\Demo\Model;

use ApiPlatform\Demo\Runtime\AdditionalAndPatternProperties;
use ApiPlatform\Demo\Runtime\AdditionalPropertiesInterface;
class ReviewJsonhalBookReadLinks implements AdditionalPropertiesInterface
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
     * @var ReviewJsonhalBookReadLinksSelf
     */
    protected $self;
    /**
     * @return ReviewJsonhalBookReadLinksSelf
     */
    public function getSelf(): ReviewJsonhalBookReadLinksSelf
    {
        return $this->self;
    }
    /**
     * @param ReviewJsonhalBookReadLinksSelf $self
     *
     * @return self
     */
    public function setSelf(ReviewJsonhalBookReadLinksSelf $self): self
    {
        $this->initialized['self'] = true;
        $this->self = $self;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['self' => ['self', 'getSelf', 'setSelf']];
    }
}