<?php

namespace Jane\Generated\DigitalOcean\Model;

class AppProposeResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Indicates whether the app is a static app.
     *
     * @var bool
     */
    protected $appIsStatic;
    /**
     * Indicates whether the app name is available.
     *
     * @var bool
     */
    protected $appNameAvailable;
    /**
     * The suggested name if the proposed app name is unavailable.
     *
     * @var string
     */
    protected $appNameSuggestion;
    /**
     * The maximum number of free static apps the account can have. We will charge you for any additional static apps.
     *
     * @var string
     */
    protected $existingStaticApps;
    /**
     * The desired configuration of an application.
     *
     * @var AppSpec
     */
    protected $spec;
    /**
     * The monthly cost of the proposed app in USD.
     *
     * @var int
     */
    protected $appCost;
    /**
     * The monthly cost of the proposed app in USD using the previous pricing plan tier. For example, if you propose an app that uses the Professional tier, the `app_tier_downgrade_cost` field displays the monthly cost of the app if it were to use the Basic tier. If the proposed app already uses the lest expensive tier, the field is empty.
     *
     * @deprecated
     *
     * @var int
     */
    protected $appTierDowngradeCost;
    /**
     * Indicates whether the app is a static app.
     *
     * @return bool
     */
    public function getAppIsStatic(): bool
    {
        return $this->appIsStatic;
    }
    /**
     * Indicates whether the app is a static app.
     *
     * @param bool $appIsStatic
     *
     * @return self
     */
    public function setAppIsStatic(bool $appIsStatic): self
    {
        $this->initialized['appIsStatic'] = true;
        $this->appIsStatic = $appIsStatic;
        return $this;
    }
    /**
     * Indicates whether the app name is available.
     *
     * @return bool
     */
    public function getAppNameAvailable(): bool
    {
        return $this->appNameAvailable;
    }
    /**
     * Indicates whether the app name is available.
     *
     * @param bool $appNameAvailable
     *
     * @return self
     */
    public function setAppNameAvailable(bool $appNameAvailable): self
    {
        $this->initialized['appNameAvailable'] = true;
        $this->appNameAvailable = $appNameAvailable;
        return $this;
    }
    /**
     * The suggested name if the proposed app name is unavailable.
     *
     * @return string
     */
    public function getAppNameSuggestion(): string
    {
        return $this->appNameSuggestion;
    }
    /**
     * The suggested name if the proposed app name is unavailable.
     *
     * @param string $appNameSuggestion
     *
     * @return self
     */
    public function setAppNameSuggestion(string $appNameSuggestion): self
    {
        $this->initialized['appNameSuggestion'] = true;
        $this->appNameSuggestion = $appNameSuggestion;
        return $this;
    }
    /**
     * The maximum number of free static apps the account can have. We will charge you for any additional static apps.
     *
     * @return string
     */
    public function getExistingStaticApps(): string
    {
        return $this->existingStaticApps;
    }
    /**
     * The maximum number of free static apps the account can have. We will charge you for any additional static apps.
     *
     * @param string $existingStaticApps
     *
     * @return self
     */
    public function setExistingStaticApps(string $existingStaticApps): self
    {
        $this->initialized['existingStaticApps'] = true;
        $this->existingStaticApps = $existingStaticApps;
        return $this;
    }
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
     * The monthly cost of the proposed app in USD.
     *
     * @return int
     */
    public function getAppCost(): int
    {
        return $this->appCost;
    }
    /**
     * The monthly cost of the proposed app in USD.
     *
     * @param int $appCost
     *
     * @return self
     */
    public function setAppCost(int $appCost): self
    {
        $this->initialized['appCost'] = true;
        $this->appCost = $appCost;
        return $this;
    }
    /**
     * The monthly cost of the proposed app in USD using the previous pricing plan tier. For example, if you propose an app that uses the Professional tier, the `app_tier_downgrade_cost` field displays the monthly cost of the app if it were to use the Basic tier. If the proposed app already uses the lest expensive tier, the field is empty.
     *
     * @deprecated
     *
     * @return int
     */
    public function getAppTierDowngradeCost(): int
    {
        return $this->appTierDowngradeCost;
    }
    /**
     * The monthly cost of the proposed app in USD using the previous pricing plan tier. For example, if you propose an app that uses the Professional tier, the `app_tier_downgrade_cost` field displays the monthly cost of the app if it were to use the Basic tier. If the proposed app already uses the lest expensive tier, the field is empty.
     *
     * @param int $appTierDowngradeCost
     *
     * @deprecated
     *
     * @return self
     */
    public function setAppTierDowngradeCost(int $appTierDowngradeCost): self
    {
        $this->initialized['appTierDowngradeCost'] = true;
        $this->appTierDowngradeCost = $appTierDowngradeCost;
        return $this;
    }
}