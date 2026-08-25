<?php

namespace Github\Model;

use Github\Runtime\AdditionalAndPatternProperties;
use Github\Runtime\AdditionalPropertiesInterface;
class ReposOwnerRepoPagesPostBody implements AdditionalPropertiesInterface
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
     * @var ReposOwnerRepoPagesPostBodySource
     */
    protected $source;
    /**
     * @return ReposOwnerRepoPagesPostBodySource
     */
    public function getSource(): ReposOwnerRepoPagesPostBodySource
    {
        return $this->source;
    }
    /**
     * @param ReposOwnerRepoPagesPostBodySource $source
     *
     * @return self
     */
    public function setSource(ReposOwnerRepoPagesPostBodySource $source): self
    {
        $this->initialized['source'] = true;
        $this->source = $source;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['source' => ['source', 'getSource', 'setSource']];
    }
}