<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseAddonsGetApp implements AdditionalPropertiesInterface
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
     * @var list<AddonsAppInfo>
     */
    protected $apps;
    /**
     * @return list<AddonsAppInfo>
     */
    public function getApps(): array
    {
        return $this->apps;
    }
    /**
     * @param list<AddonsAppInfo> $apps
     *
     * @return self
     */
    public function setApps(array $apps): self
    {
        $this->initialized['apps'] = true;
        $this->apps = $apps;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['apps' => ['apps', 'getApps', 'setApps']];
    }
}