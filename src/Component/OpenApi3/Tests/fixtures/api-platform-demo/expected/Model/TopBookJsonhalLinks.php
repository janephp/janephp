<?php

namespace ApiPlatform\Demo\Model;

use ApiPlatform\Demo\Runtime\AdditionalAndPatternProperties;
use ApiPlatform\Demo\Runtime\AdditionalPropertiesInterface;
class TopBookJsonhalLinks implements AdditionalPropertiesInterface
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
     * @var TopBookJsonhalLinksSelf
     */
    protected $self;
    /**
     * @return TopBookJsonhalLinksSelf
     */
    public function getSelf(): TopBookJsonhalLinksSelf
    {
        return $this->self;
    }
    /**
     * @param TopBookJsonhalLinksSelf $self
     *
     * @return self
     */
    public function setSelf(TopBookJsonhalLinksSelf $self): self
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