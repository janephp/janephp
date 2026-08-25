<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppPropose implements AdditionalPropertiesInterface
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
     * The desired configuration of an application.
     *
     * @var AppSpec
     */
    protected $spec;
    /**
     * An optional ID of an existing app. If set, the spec will be treated as a proposed update to the specified app. The existing app is not modified using this method.
     *
     * @var string
     */
    protected $appId;
    /**
     * The desired configuration of an application.
     *
     * @return AppSpec
     */
    public function getSpec(): AppSpec
    {
        return $this->spec;
    }
    /**
     * The desired configuration of an application.
     *
     * @param AppSpec $spec
     *
     * @return self
     */
    public function setSpec(AppSpec $spec): self
    {
        $this->initialized['spec'] = true;
        $this->spec = $spec;
        return $this;
    }
    /**
     * An optional ID of an existing app. If set, the spec will be treated as a proposed update to the specified app. The existing app is not modified using this method.
     *
     * @return string
     */
    public function getAppId(): string
    {
        return $this->appId;
    }
    /**
     * An optional ID of an existing app. If set, the spec will be treated as a proposed update to the specified app. The existing app is not modified using this method.
     *
     * @param string $appId
     *
     * @return self
     */
    public function setAppId(string $appId): self
    {
        $this->initialized['appId'] = true;
        $this->appId = $appId;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['spec' => ['spec', 'getSpec', 'setSpec'], 'appId' => ['app_id', 'getAppId', 'setAppId']];
    }
}