<?php

namespace ApiPlatform\Demo\Model;

use ApiPlatform\Demo\Runtime\AdditionalAndPatternProperties;
use ApiPlatform\Demo\Runtime\AdditionalPropertiesInterface;
class BookJsonhalLinks implements AdditionalPropertiesInterface
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
     * @var BookJsonhalLinksSelf
     */
    protected $self;
    /**
     * @return BookJsonhalLinksSelf
     */
    public function getSelf(): BookJsonhalLinksSelf
    {
        return $this->self;
    }
    /**
     * @param BookJsonhalLinksSelf $self
     *
     * @return self
     */
    public function setSelf(BookJsonhalLinksSelf $self): self
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