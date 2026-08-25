<?php

namespace ApiPlatform\Demo\Model;

use ApiPlatform\Demo\Runtime\AdditionalAndPatternProperties;
use ApiPlatform\Demo\Runtime\AdditionalPropertiesInterface;
class BookJsonhalBookReadLinks implements AdditionalPropertiesInterface
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
     * @var BookJsonhalBookReadLinksSelf
     */
    protected $self;
    /**
     * @return BookJsonhalBookReadLinksSelf
     */
    public function getSelf(): BookJsonhalBookReadLinksSelf
    {
        return $this->self;
    }
    /**
     * @param BookJsonhalBookReadLinksSelf $self
     *
     * @return self
     */
    public function setSelf(BookJsonhalBookReadLinksSelf $self): self
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