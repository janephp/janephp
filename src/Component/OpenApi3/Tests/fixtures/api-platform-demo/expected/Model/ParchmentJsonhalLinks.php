<?php

namespace ApiPlatform\Demo\Model;

use ApiPlatform\Demo\Runtime\AdditionalAndPatternProperties;
use ApiPlatform\Demo\Runtime\AdditionalPropertiesInterface;
class ParchmentJsonhalLinks implements AdditionalPropertiesInterface
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
     * @var ParchmentJsonhalLinksSelf
     */
    protected $self;
    /**
     * @return ParchmentJsonhalLinksSelf
     */
    public function getSelf(): ParchmentJsonhalLinksSelf
    {
        return $this->self;
    }
    /**
     * @param ParchmentJsonhalLinksSelf $self
     *
     * @return self
     */
    public function setSelf(ParchmentJsonhalLinksSelf $self): self
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